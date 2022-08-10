<?php

// 数据类型

namespace _0809;

// 1. 基本类型: 不可再分

// int /float
$age = 20;
$price = 88.88;

// string
$username = 'admin';

// boolean
$isDel = true;

// ---------------------------

// 2. 复合类型
// 数组
$arr =  [20,'admin',true];

// 对象
$obj = new class (15000) {
    public float $salary;
    public function __construct(float $salary)
    {
        $this->salary = $salary;
    }
};

echo gettype($obj);
echo $obj->salary . '<br>';

// null
// null: 表示变量没有值
// 三种情况为null
// 1. 赋值 null, 2. 没赋值  3. 被销毁 unset()
$x = null;
$x = 123;
// unset($x);
echo gettype($x) . '<br>';

// 资源
$f = fopen('demo1.php', 'r');
echo gettype($f) . '<br>';

// callback: 回调
// php用字符串来传递函数,所以可以以任何形式传递函数
// 所以回调函数不仅包括函数 ,还包括对象方法,静态类方法等
// 接受回调的函数很多,例如前面遇到的array_filter

function hello(string $name, float $salary): string
{
    return 'Hello, ' . $name . ', 工资是: ' .$salary;
}

echo hello('王老师', 12345) . '<br>';

// call_user_func(函数, 参数列表)
echo \call_user_func('hello', '张老师', 56789) . '<br>';
echo call_user_func_array('hello', ['张老师', 56789]) . '<br>';
$params = [ '李老师', 10000];
echo call_user_func_array('hello', $params) . '<br>';

/**
 * call_user_func(函数名, 参数列表)
 * call_user_func_array(函数名, [参数列表...])
 * 哪怕只有一个参数,也尽量使用第二种
 *
 * call_user_func_array()的第一个参数是要执行的函数
 * 这个函数参数可以有三个来源
 * 1. 用户自定义的函数
 * 2. 对象方法
 * 3. 类方法/静态方法
 */

// 如果这个函数来自对象方法

class Demo1
{
    public function hello(string $name): string
    {
        return 'Hello , ' . $name;
    }
}
$obj = new Demo1();

echo call_user_func_array([$obj, 'hello'], ['狗老师']) . '<br>';

// 如果这个函数来自: 类方法


class Demo2
{
    public static function hello(string $name): string
    {
        return 'Hello , ' . $name;
    }
}

echo call_user_func_array(['Demo2', 'hello'], ['鸡老师']) . '<br>';
