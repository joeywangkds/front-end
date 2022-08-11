<?php
namespace _0810;


$colorArray = ['green','blue','red'];

// var_dump(implode(',', $colorArray)) ;

$link ='mysql:dbname=phpedu;root;root';

list($dbname,$user,$password) = explode(';',$link);

// printf('%s,%s,%s', $dbname,$user,$password);



 vprintf('%s,%s,%s', explode(';',$link));