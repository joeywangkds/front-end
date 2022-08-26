<?php

namespace _0819;

use PDO;

$db = new PDO('mysql:dbname=phpedu;', 'root', 'root');

// 1. 页面
$page = $_GET['p'] ?? 1;

echo "Current page is " . $page . ".<br>";

//2. 数量
$num = 5;

$offset = ($page - 1) * $num;

// 3. 总数
$sql = <<<SQL
    SELECT COUNT(*) AS `total`
    FROM `staff`
    -- LIMIT $offset, $num;
SQL;

$stmt = $db->prepare($sql);
$stmt->execute();

$stmt->bindColumn('total', $total);
$stmt->fetch();



echo "Current, all records number is " . $total . ".<br>";

echo "Current offset is " . $offset . ".<br>";
$page = ceil($total / $num);
echo "The total page will be :" . $page . ".<br>";
echo "<hr>";




$sql = <<<SQL
    SELECT *
    FROM `staff`
    LIMIT $offset, $num;
SQL;

$stmt = $db->prepare($sql);
$stmt->execute();

$staffs = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($staffs);
// printf("<pre>%s</pre>",print_r($staffs,true));
if (count($staffs) === 0) {
    echo "The record is empty";
} else {
    foreach ($staffs as $staff) {
        extract($staff);
        printf('ID: %d, name is %s, gender is %d, and email is : %s', $id, $name, $gender, $email . "<br>");
        // vprintf("%s", $staff);
    }
}
