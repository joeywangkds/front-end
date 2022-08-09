<?php


$username = "<h1>zhuozi</h1>";

echo $username;

function getUsername(string $username){
    return 'Hello '.$username;
}

echo getUsername('Mr.Wang');

function getTotel(float $price, int $num){
    return $price * $num;
}
echo "<hr>";

echo "Total price is: ".getTotel(45,5);

$getTotal = function (float $price, int $num):float{
    return $price * $num;
};
echo "<hr>";
echo "Total price is: {$getTotal(45,2)}";
echo "<hr>";
$sum = function(...$args){
    //var_dump($args);
    return array_sum($args);
};

echo $sum(4,5,6,7,8);
echo "<hr>";


$param = [4,5,6,7,8];
echo $sum(...$param);