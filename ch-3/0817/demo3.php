<?php

namespace pdo_edu;

// require __DIR__.'\config\connect.php';

use PDO;

$dsn = 'mysql:host = localhost;dbname=phpedu;port:3306,charset = utf8';
$db  = new PDO($dsn, 'root', 'root');

//匿名参数
// $sql = "INSERT `staff` SET `name`= ?,`gender` = ?,`email` =?";

$sql = <<< SQL
    INSERT `staff`
    SET `name`= ?,`gender` = ?,`email` =?;
SQL;

$stmt = $db->prepare($sql);

// $sql = "INSERT `staff` SET `name` = 'admin',`gender` = 1,`email` = 'joey@test.com'";



// $data = ['Leo',0,'test@test.com'];


list($name,$gender,$email)=$newPerson = ['Lee',1,'lee@test.com'];

$stmt->bindValue(1,$name,PDO::PARAM_STR);
$stmt->bindValue(2,$gender,PDO::PARAM_INT);
$stmt->bindValue(3,$email,PDO::PARAM_STR);




if($stmt->execute()){
    echo "success, and the new id is #".$db->lastInsertId();
}else{
    echo "not success";
}

// $stmt->debugDumpParams();
