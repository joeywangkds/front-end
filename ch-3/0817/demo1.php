<?php

namespace pdo_edu;

// require __DIR__.'\config\connect.php';



use PDO;

$dsn = 'mysql:host = localhost;dbname=phpedu;port:3306,charset = utf8';
$db  = new PDO($dsn, 'root', 'root');

//匿名参数
$sql = "INSERT `staff` SET `name`= ?,`gender` = ?,`email` =?";

// $sql = "INSERT `staff` SET `name` = 'admin',`gender` = 1,`email` = 'joey@test.com'";

$stmt = $db->prepare($sql);

$data = ['Leo',0,'test@test.com'];



if($stmt->execute()){
    echo "success, and the new id is #".$db->lastInsertId();
}else{
    echo "not success";
}

// $stmt->debugDumpParams();
