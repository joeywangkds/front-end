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



// if(stripos($sql,'where')===false){
//     exit('fobbidon no where update!');
// }else{  
// }

$stmt = $db->prepare($sql);

$num = 5;
$stmt->bindParam(1,$num,PDO::PARAM_INT);

if($stmt->execute()){

    // for($i=0;$i<$num;$i++){
    //     $staff = $stmt->fetch(PDO::FETCH_ASSOC);
    //     if($staff){
    //         printf("<pre>%s</pre>",print_r($staff,true));
    //     }else{
    //         echo "no more";
    //     }
    // }
    ;
    while($staff = $stmt->fetch(PDO::FETCH_ASSOC)){
        printf("<pre>%s</pre>",print_r($staff,true));

    }
   

}else{
    echo "not success";
}

// $stmt->debugDumpParams();
