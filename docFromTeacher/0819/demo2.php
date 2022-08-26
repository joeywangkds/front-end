<?php

// * 获取分页数据

namespace _0819;

use PDO;

// 连接
$db = new PDO('mysql:dbname=phpedu', 'root', 'root');

// 1. 页数
$page = $_GET['p'];
echo '当前页数: p = ' . $page . '<br>';

// 2. 数量
$num = 5;
echo '当前数量: num = ' . $num . '<br>';


// 3. 偏移量 = (页数 - 1) * 数量
$offset = ($page - 1) * $num;
echo '当前偏移量: offset = ' . $offset . '<br>';

$sql = <<< SQL
    SELECT *
    FROM `staff`
    LIMIT $offset, $num;
SQL;

$stmt = $db->prepare($sql);
$stmt->execute();
$staffs = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($staffs as $staff) {
    extract($staff); // $id,$name,$sex,$email
    printf('%d-%s-%s-%s<br>', $id, $name, $sex, $email);
}
