<?php

namespace pdo_edu;

// $dsn = 'mysql:host = localhost;dbname=phpedu;port:3306charset = utf8';

return [
    'type'=>'mysql',

    'host'=>'localhost',

    'dbname'=>'phpedu',

    'username'=>'root',

    'password'=>'root',

    'charset' => 'utf8'
];


// CREATE TABLE `staff`(
//     `id` int (11) NOT NULL AUTO_INCREMENT COMMENT '员工ID',
// 	`name` varchar (30) NOT NULL COMMENT '员工姓名',
//     `sex` tinyint (1) UNSIGNED NOT NULL COMMENT '性别10:男11:女',
// 	`email` varchar (100) NOT NULL COMMENT '员工邮箱',
// 	PRIMARY KEY (`id`)
// )ENGINE = InnoDB DEFAULT CHARSET = utf8