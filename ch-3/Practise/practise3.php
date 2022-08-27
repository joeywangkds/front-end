<?php


$array1 = ['10','20','30'];

// print_r($array1);

$test = function ($num){
    return $num > 15;
};

$results = array_filter($array1,$test);

foreach($results as $result ){
    echo $result."<br>";
}