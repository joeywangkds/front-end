<?php

namespace admin;

// echo __NAMESPACE__;
// namespace
// require __DIR__ . '/admin/controller/Demo1.php';
// require __DIR__ . '/admin/controller/Demo2.php';
// require __DIR__ . '/admin/controller/Demo3.php';

// 自动加载器
spl_autoload_register(function ($class) {
    // admin\controller\Demo1
    // echo $class;
    // require __DIR__ . '/admin/controller/Demo1'.'.php';
    // require __DIR__ . '/'.$class.'.php';
    require $class.'.php';

    // 根据系统不同,实现目录分隔符的转换
    // $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    // require __DIR__ . DIRECTORY_SEPARATOR. $class.'.php';

    // 绝对路径
    // require __DIR__ . DIRECTORY_SEPARATOR . $path.'.php';
    // 相对路径

    // require  $path.'.php';
    // $file =  $path.'.php';
    // if (file_exists($file)) {
    //     require  $file;
    // }
});

// use
// use controller\Demo1;
// use controller\Demo2;
// use controller\Demo3;
// use 默认必须是"完全限定名称",所以"\"全局空间标识符可以不写

use admin\controller\Demo1;
use admin\controller\Demo2;
use admin\controller\Demo3;

// 访问三个控制器Demo1,Demo2,Demo3,index()
// 完全限定名称:绝对路径
// echo \admin\controller\Demo1::index(). '<br>';
// echo \admin\controller\Demo2::index(). '<br>';
// echo \admin\controller\Demo3::index(). '<br>';

// 限定名称: 相对路径
// echo controller\Demo1::index(). '<br>';
// echo controller\Demo2::index(). '<br>';
// echo controller\Demo3::index(). '<br>';

// 非限定名称: 当前路径
echo Demo1::index(). '<br>';
echo Demo2::index(). '<br>';
echo Demo3::index(). '<br>';
