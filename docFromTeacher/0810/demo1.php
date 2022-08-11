<?php

namespace _0810;

// 作用域
// php只有函数作用域,函数之外都是全局

// 1. 不支持块作用域
if (true) {
    $a = 100;
}
// if 代码块外部, 依然可以访问到$a
echo $a . '<hr>';

// 2. 函数作用域

// 问题1: 如何在函数内部, 访问到函数外部声明的变量?

// 全局变量: 函数外声明的变量
$name = '猪老师';
function hello(): string {
    //js允许,外部变量全局有效, 但php中不可以
    //return 'Hello, ' . $name;

    // 结论: 函数内部不能直接访问外部声明的变量
    // 解决: 有5种解决方案
    // 前2个在函数内部解决,后3个声明函数时解决

    //(1) global 声明
    //global $name;
    //return 'Hello, ' . $name;

    // (2) $GLOBALS['name'] 全局变量自动成该全局数组的成员
    return 'Hello, ' . $GLOBALS['name'];

}
echo hello() . '<hr>';

//(3) 函数表达式, use (外部变量)
$name = '狗老师';
$hello = function () use ($name) {
    return 'Hello, ' . $name;
};
echo $hello() . '<hr>';

// (4) 箭头函数(php7.4+)
$name = '猫老师';
// 必须fn开始,且=>后面是一个表达式,而非代码块
$hello = fn() => 'Hello, ' . $name;
echo $hello() . '<hr>';
// php箭头函数有很多限制并不完善,了解即可,暂不要用在生产环境中

// (5) 纯函数: 外部数据通过参数注入到函数中
$name = '牛老师';
$hello = function ($name) {
    return 'Hello, ' . $name;
};
echo $hello($name) . '<hr>';


/**
 * 函数内部使用外部变量的5种方式
 * 1. global
 * 2. $GLOBALS['outer']
 * 3. function () use ($outer) {...}
 * 4. fn()=>(...)
 * 5. function ($outer) {...}
 */

// 问题2: 如果在函数外部, 访问到函数内部声明的变量?


$hello = function (): array {
    $username = '鸭老师';
    // 想把私有变量返回,可以将它放在一个数组中返回
    // 这个数组至少要有二个值: 1 需要返回的私有变量, 2 正常返回的结果
    return [$username, 'Hello world'];

    // 注: 实际项目中, 返回一个JSON字符串更有意义,以后项目中会提及
};

// 将数组成员, 解构到独立变量中
list($username, $result) = $hello();

echo $username ?? '未定义' ;

echo  '<hr>';

// 问题3: 如果函数私有变量与外部变量同名怎么办?

$name = '张老师';
$hello = function () use ($name) : string {
    $name = '李老师';
    return 'Hello , ' . $name;
};

// 张老师, 还是李老师
// 输出李老师, 因为函数内, 同名私有变量 $name 会覆盖外部同名变量
echo $hello() . '<hr>';
