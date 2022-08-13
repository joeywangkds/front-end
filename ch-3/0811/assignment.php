<?php

### array_chuck()

$stu = [
    'id' => 101,
    'name' => '无忌',
    'age' => 20,
    'course' => 'php',
    'grade' => 80
];

$fn1 = array_chunk($stu,2);

printf("<pre>%s</pre>",print_r($fn1,true));

foreach($fn1 as $singleStudent){
    foreach($singleStudent as $detail){
        echo $detail."<br>";
    }
}

echo "<hr>";

### array_combine()

$number = ['1','2','3'];

$student = ['Steve','Carl','Jessica'];

$newClass = array_combine($number,$student);

foreach($newClass as $key=>$singleStudent){
    printf('[ %s ] => %s<br>', $key, $singleStudent);
}

echo "<hr>";


### array_map()

$number2 = ['4','5','6'];

function doubleNum($num){
    return $num *2;
}

$afterMap = array_map('doubleNum',$number2);
foreach ($afterMap as $singleNum) {

    echo $singleNum."<br>";
}


echo "<hr>";
### array_merge()

$student2 = ['Leo','Jeff','Dean'];

$studentGroup = array_merge($student, $student2);

foreach($studentGroup as $singleStudent){
    echo $singleStudent."<br>";
}

echo "<hr>";


### array_walk()
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

ksort($fruits);

function addFruit($putInFruit, $key){
    echo $key.":".$putInFruit."<br>";
}

array_walk($fruits,'addFruit');

// printf("<pre>%s</pre>",print_r($newFruits,true));


