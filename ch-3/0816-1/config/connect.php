<?php

namespace pdo_edu;

use PDO;


$dbConfig = require 'database.php';

extract($dbConfig);
$dsn = $type.':host ='.$host.';dbname='.$dbname;

$db  = new PDO($dsn, $username, $password);
