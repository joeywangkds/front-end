<?php


namespace pdo_edu;

use PDO;
$dsn = 'mysql:host = localhost;dbname=phpedu;port:3306;charset = utf8';
$username = 'root';
$password = 'root';
$db  = new PDO($dsn, $username, $password);
var_dump($db);