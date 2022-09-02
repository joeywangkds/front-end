<?php

// $array = [
//     'id' => 1,
//     'name' => 'admin',
//     'gender' => 1
// ];

// list($id, $name, $gender) = $array;



$test2 = 20;


function wala()
{
    global $staffs;
    global $test2;
    echo $test2."<br>";
    
}

wala();
echo $test2;