<?php

namespace _0819;

use PDO;

$db = new PDO('mysql:dbname=phpedu;','root','root');
// $dsn = 'mysql:host = localhost;dbname=phpedu;port:3306,charset = utf8';
// $db = new PDO('mysql:dbname=phpedu;', 'root', 'root');

$sql = <<<SQL
    SELECT `id`,`name`, `gender`, `email`
    FROM `staff`; 
SQL;

$stmt = $db->prepare($sql);

$stmt->execute();

// $stmt->bindColumn(1,$id);
// $stmt->bindColumn(2,$name);
// $stmt->bindColumn(3,$gender);
// $stmt->bindColumn(4,$email);

// $stmt->bindColumn('id',$id);
// $stmt->bindColumn('name',$name);
// $stmt->bindColumn('gender',$gender);
// $stmt->bindColumn('email',$email);

// while($stmt->fetch()){
//     printf('%d : %s, %d , %s',$id,$name,$gender,$email."<br>");
// }



$staffs = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($staffs);