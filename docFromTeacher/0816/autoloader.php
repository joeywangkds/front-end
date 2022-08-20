<?php

// 自动加载器
spl_autoload_register(function ($class) {
    require $class.'.php';
});


// class Loader
// {
//     public function __construct($class)
//     {
//         $this->init($class);
//     }

//     public static function init($class)
//     {
//         spl_autoload_register(function () {
//             global $class;
//             require $class.'.php';
//         });
//     }
// }


// new Loader($class);
