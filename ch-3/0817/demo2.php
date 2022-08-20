<?php

namespace pdo_edu;

// require __DIR__.'\config\connect.php';



use PDO;

$dsn = 'mysql:host = localhost;dbname=phpedu;port:3306,charset = utf8';
$db  = new PDO($dsn, 'root', 'root');

// 命名参数
$sql = "INSERT `staff` SET `name`= :name,`gender` = :gender,`email` =:email";

// $sql = "INSERT `staff` SET `name` = 'admin',`gender` = 1,`email` = 'joey@test.com'";

$stmt = $db->prepare($sql);

$data = ['name'=>'Jack','gender'=>0,'email'=>'test@test.com'];



if($stmt->execute()){
    echo "success, and the new id is #".$db->lastInsertId();
}else{
    echo "not success";
}
// $stmt->debugDumpParams();
