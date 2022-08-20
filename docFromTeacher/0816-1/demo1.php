<?php

namespace pdo_edu;

use PDO;

/**
 * 1. 读: select
 * 2. 写: insert, update, delete
 * CURD: 增删改查
 */


/**
 * 1. 连接数据库
 * 2. CURD
 * 3. 关闭连接(可选)
 */

//  1. 连接数据库
$dsn = 'mysql:host=localhost;dbname=phpedu;port:3306;charset=utf8';
$username = 'root';
$password = 'root';
$db =new PDO($dsn, $username, $password);
var_dump($db);

// 2. CURD

// 3. 关闭连接
// 销毁连接对象
// $db = null;
// unset($db);
