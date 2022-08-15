<?php

namespace _0812;

// 对象是一个容器,是全局成员一个前缀

/**
 * class: 声明类
 * new: 实例化类
 */

// 类: 全局成员, 声明 , class, 大驼峰, UserName, PascalName

// 1. 类声明
class Goods
{
    // ...
}

// 2. 类的实例化->对象
$goods = new Goods();

// 实例总是与一个类绑定, 对象更通用一些, 在不引起歧义时,实例==对象

var_dump($goods instanceof Goods);

echo '<hr>';

echo get_class($goods) . '<br>';

// 动态类
// 控制器就是一个动态类, 控制器名称出现url
$controller = ucfirst('goods');
// UserController.php
// $controller = ucfirst( 'goods') . 'Controller';
$obj = new $controller();
var_dump($obj);
