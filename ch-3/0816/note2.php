<?php


namespace admin;


// echo __NAMESPACE__;

// require __DIR__.'\admin\controller\Demo1.php';
// require __DIR__.'\admin\controller\Demo2.php';


echo"<hr>";



spl_autoload_register(function($class){

    $path = str_replace('\\',DIRECTORY_SEPARATOR,$class);

    require __DIR__.DIRECTORY_SEPARATOR.$class.'.php';
    // echo $class;
});


use admin\controller\Demo1;
use admin\controller\Demo2;


echo __DIR__;

echo"<hr>";

echo Demo1::index();
echo"<hr>";
echo Demo2::index();