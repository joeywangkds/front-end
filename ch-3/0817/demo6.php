<?php

namespace pdo_edu;

// require __DIR__.'\config\connect.php';

use PDO;

$dsn = 'mysql:host = localhost;dbname=phpedu;port:3306,charset = utf8';
$db  = new PDO($dsn, 'root', 'root');

//匿名参数
// $sql = "INSERT `staff` SET `name`= ?,`gender` = ?,`email` =?";

$sql = <<< SQL
    DELETE FROM `staff`
    WHERE `id` = ?;
    
    
SQL;

// WHERE `id` =?;

$pos = stripos($sql,'where');


if(stripos($sql,'where')===false){
    exit('fobbidon no where update!');
}else{  
}



$stmt = $db->prepare($sql);

// $sql = "INSERT `staff` SET `name` = 'admin',`gender` = 1,`email` = 'joey@test.com'";



// $data = ['Leo',0,'test@test.com'];

// $stmt->bindParam(1,$name,PDO::PARAM_STR);
// $stmt->bindParam(2,$gender,PDO::PARAM_INT); 
// $stmt->bindParam(3,$email,PDO::PARAM_STR);
// $stmt->bindParam(4,$id,PDO::PARAM_INT);


// $data = list($name,$gender,$email) = ['Tong',1,'tong@test.co',9];
$id=[10] ;


if($stmt->execute($id)){
    echo "There is ".$stmt->rowCount()." row has been delete!";
}else{
    echo "not success";
}

// $stmt->debugDumpParams();
