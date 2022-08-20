<?php

namespace pdo_edu;

use PDO;

$dbConfig = require 'database.php';
// print_r($dbConfig);
extract($dbConfig);
// echo $type, $host,$username;

// $dsn = 'mysql:host=localhost;dbname=phpedu;port:3306;charset=utf8';

$dsn = $type. ':host='. $host.';dbname='.$dbname;
$db =new PDO($dsn, $username, $password);
