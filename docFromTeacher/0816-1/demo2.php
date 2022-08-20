<?php

namespace pdo_edu;

use PDO;
use PDOStatement;

// 插入-1

//  1. 连接数据库
require __DIR__ . '/config/connect.php';


// 2. CURD
// 新增
// INSERT INTO 表名 (字段名1,字段名2,字段名3,...) VALUES (值1,值2,值3,...)
// INSERT 表名 (字段名1,字段名2,字段名3,...) VALUES (值1,值2,值3,...)
// 如是mysql,且单条,还可以简化
// INSERT 表名 SET 字段名1=值1,字段名2=,值2,字段名3=值3,...
// SELECT * FROM `staff` WHERE 1

/**
 * 1. SQL关键字全部大写
 * 2. 表名,字段名必须要反引号,防止和关键字冲突
 */
$sql = "INSERT `staff` SET `name`='admin',`gender`=1,`email`='admin@php.cn'";

// 创建sql语句对象
// new PDOStatement
$stmt  =$db->prepare($sql);

// var_dump($stmt);

// 执行sql
if ($stmt->execute()) {
    echo '插入成功';
}

// 3. 关闭连接
// 销毁连接对象
// $db = null;
// unset($db);
