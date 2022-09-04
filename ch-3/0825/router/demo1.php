<?php

namespace _0825;

require __DIR__.'/../helper/helper.php';

$wala = "wala";

p($wala);
p([1,2,3]);

p($_SERVER['REQUEST_URI']);

// foreach ($_SERVER as $parm => $value)  echo "$parm = '$value'"."<br>";



class test
{
    public static function show($a,$b){
        echo $a+$b;
    }
}

$obj = new test;


$param = ['a'=>1,'b'=>2];

echo call_user_func_array([$obj,'show'],$param);
