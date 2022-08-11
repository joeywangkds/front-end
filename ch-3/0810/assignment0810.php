<?php


//Method 1
$newShoes = 'Kyrie7';

function displayShoes():string
{
    return "Use \$GLOBALS read outside varible:".$GLOBALS['newShoes']."<HR>";
}

echo displayShoes();


//Method 2
$newShoes2 = 'KD14';

function displayShoes2():string
{

    global $newShoes2;
    return "Use global inside of function to read from outside:".$newShoes2."<HR>";
}

echo displayShoes2();


//Method 3
$newShoes3 = "PG6";
$displayShoes3 = function() use ($newShoes3){
    return "Use \"use\" to read a outside varible:".$newShoes3."<HR>";
};

echo $displayShoes3();

//Method 4
$newShoes4 = "KOBE5";
$displayShoes4 = fn() => "Use arrow function to read a outside varible:".$newShoes4."<HR>";

echo $displayShoes4();

//Method 5
$newShoes5 = "KyrieLow4";
function displayShoes5(string $shoeName){
    return "Use function to read a outside varible:".$shoeName."<HR>";
}

echo displayShoes5($newShoes5);


//5 string functions

//1.MD5

$password = "mypasswordforgmail567";

echo MD5($password)."<HR>";

//2.chuck_split

echo $new_string = chunk_split($password,6,",");
echo "<HR>";

// var_dump($new_string);

//3.str_ireplace

echo $new_string2 = str_ireplace("gmail","office365",$password)."<HR>";

//4.str_split 

$newArray = str_split($password,2);

foreach($newArray as $newItem){
    echo $newItem."<BR>";
}
echo "<HR>";

//5.explode 非常喜欢，想多练习一下

$finalArray = rtrim($new_string,",");


$splitedArray = explode(',',$finalArray);


foreach($splitedArray as $newItem2){
    echo $newItem2."<BR>";
}