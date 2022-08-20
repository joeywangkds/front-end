<?php

namespace pdo_edu;

// require __DIR__.'\config\connect.php';

use PDO;

$dsn = 'mysql:host = localhost;dbname=phpedu;port:3306,charset = utf8';
$db  = new PDO($dsn, 'root', 'root');

//匿名参数
// $sql = "INSERT `staff` SET `name`= ?,`gender` = ?,`email` =?";

$sql = <<< SQL
    SELECT `id`,`name`,`email` FROM `staff` 
    LIMIT ?

SQL;





$stmt = $db->prepare($sql);

$stmt->bindValue(1,5,PDO::PARAM_INT);

if($stmt->execute()){


    // while($staff = $stmt->fetchAll(PDO::FETCH_ASSOC)){
    //     printf("<pre>%s</pre>",print_r($staff,true));

    // }
    $staff = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($staff as $newstaff){
        printf("<pre>%s</pre>",print_r($newstaff,true));

    }

    print_r($staff,true);

}else{
    echo "not success";
}

// $stmt->debugDumpParams();
