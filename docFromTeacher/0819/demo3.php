<?php

// * 获取总页数

namespace _0819;

use PDO;

// 连接
$db = new PDO('mysql:dbname=phpedu', 'root', 'root');

// 1. 页数
$page = $_GET['p'] ?? 1;
echo '当前页数: p = ' . $page . '<br>';

// 2. 数量
$num = 5;
echo '当前数量: num = ' . $num . '<br>';


// 3. 偏移量 = (页数 - 1) * 数量
$offset = ($page - 1) * $num;
echo '当前偏移量: offset = ' . $offset . '<br>';

// 4. 计算总记录数
// SELECT CEIL(COUNT(*)/5) AS `total` FROM `staff`
// SELECT COUNT(*) AS `total` FROM `staff`
$sql = 'SELECT COUNT(*) AS `total` FROM `staff`';
$stmt = $db->prepare($sql);
$stmt->execute();
// 将总数量绑定到一个变量上
$stmt->bindColumn('total', $total);
$stmt->fetch();
echo '当前总记录数量: total = ' . $total . '<br>';
// 5. 计算总页数
// 向上取整
$pages = ceil($total / $num);
echo '当前总页数: pages = ' . $pages . '<br>';




$sql = <<< SQL
    SELECT *
    FROM `staff`
    LIMIT $offset, $num;
SQL;

$stmt = $db->prepare($sql);
$stmt->execute();
$staffs = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo '<hr>';
if (count($staffs) === 0) {
    echo '查询结果为空';
} else {
    foreach ($staffs as $staff) {
        extract($staff); // $id,$name,$sex,$email
        printf('%d-%s-%s-%s<br>', $id, $name, $sex, $email);
    }
}
echo '<hr>';
