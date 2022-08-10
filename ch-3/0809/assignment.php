<?php

$product = ['catagroy' => 'shoe', 'id' => '0001', 'price' => 160];

printf("Catagroy:%s" . ", ID: %s" . ", Price: %s", $product['catagroy'], $product['id'], $product['price']);

echo "<hr>";

function showProduct(string $cata, string $id, int $price): string
{

    return "The new product is " . $cata . ", it's ID is " . $id . ", and the price is " . $price;
}

printf(showProduct($product['catagroy'], $product['id'], $product['price']));

echo "<hr>";

echo call_user_func('showProduct', $product['catagroy'], $product['id'], $product['price']);

echo "<hr>";

echo call_user_func_array('showProduct', $product);

echo "<hr>";

//使用对象函数

class newProduct
{
    public function newShoes(string $brand, string $color)
    {
        return "The brand new shoes is form " . $brand . ", and the color is " . $color . ".";
    }
}

$obj = new newProduct;

$pg6 = ['nike', 'green'];

// echo $obj->newShoes($pg6[0],$pg6[1]);

echo call_user_func_array([$obj, 'newShoes'], $pg6);

echo "<hr>";


// 流程控制: 分支

$price = 300;

switch (true) {
    case $price < 200:
        echo "The price is lower than 200";
        break;
    case $price = 200:
        echo "The price is equal to 200";
        break;

    case $price > 200:
        echo "The price is over 200";
        break;

    default:
        echo "The price is invaild";
        break;
}
echo "<hr>";

// 循环

$shoeInStock = ['Kyrie7','KD15','PG6'];

class shoeStore{
    public function displayShoes(){
        for($i=0;$i<sizeof($GLOBALS["shoeInStock"]);$i++){

            echo ($GLOBALS["shoeInStock"])[$i]."<br>";
     
        }
    }

}

$obj2 = new shoeStore;

call_user_func_array([$obj2,'displayShoes'],$shoeInStock);

//练习foreach

$users = [
    0=>['id'=>5,'name'=>'猪老师', 'gender'=>0, 'score'=>88],
    1=>['id'=>6,'name'=>'张老师', 'gender'=>1,'score'=>68],
    2=>['id'=>7,'name'=>'狗老师','gender'=>1, 'score'=>98],
];

echo "<hr>";

foreach ($users as $value){

    echo '学号:'.$value['id']. ", 姓名：".$value['name'].", 分数：".$value['score'].", 性别：";
    if($value['gender']==0){echo "male";}else{echo "female";}
    echo "<br>";

}