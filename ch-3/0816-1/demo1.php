<?php


namespace pdo_edu;

//1.connect to database
require __DIR__ .'/config/connect.php';


//2.CURD 

// SELECT * FROM `staff` WHERE `name` = 'admin';
$sql ="INSERT `staff` SET `name` = 'admin',`gender` = 1,`email` = 'joey@test.com'";


$stmt = $db->prepare($sql);

// var_dump($stmt);

if($stmt->execute()){
    echo "success";
}else{
    echo "not success";
}