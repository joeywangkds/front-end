<?php
namespace _0810;
// 1. 常量

// 声明: define() 或 const
// 常量命名规则: 1. 蛇形命名法, 2. 全大写
define('USER_NAME', 'admin');
const EMAIL = '498668472@qq.com';

/**
 * define, const 区别
 * 1. define是函数,可用在if中, 不能用在类中
 * 2. const: 编译阶段处理, 速度更快, 必须在作用域顶部声明,可用在类中, 不能用在if中
 * 3. 常量不受作用域限制 , 全局有效
 */

function hello() : string
{
    // 常量无须声明,直接引用
    // 不像变量,受限于作用域,需要用 global, $GLOBALS,use 等方式进行预声明
    return sprintf('Hello , %s ( %s )', USER_NAME, EMAIL);
}

echo hello() . '<hr>';

// 空字符声明一个常量, 是否全法?
define('', 'php中文网');

// 不报错,完全合法,但你就是看不到
echo '';
// 怎么办? 对于一些非法标识符的常量名,使用函数查看
echo constant(''), '<hr>';

// 因为常量可以无视作用域, 可以在所有php脚本中, 横冲直撞, 无冕之王
// 所以,特别适合保存一些全局可能用到,并且需要在所有脚本中保持数据一致的值,例如版本号
// 这种由php系统定义, 程序员无须提前声明,可以直接拿来就用的常量,叫"预定义常量" 或"内置常量"
// (1) 预定义常量

echo 'PHP版本: ' . PHP_VERSION . '<br>';
echo '操作系统: ' . PHP_OS . '<hr>';
// 更多常量查手册

// (2) 特殊的预定义常量: 魔术常量
// 魔术常量,其实是预定义常量的一个子集
// 为什么叫魔术常量?
// 常量二大特征: 有确定的值, 具不能修改
// 但是魔术常量, 没有确定的值,上系统自动更新维护,用户不能改,所以叫魔术常量

echo '当前行号 : ' . __LINE__ . '<br>';
echo '当前文件名 : ' . __FILE__ . '<br>';
echo '当前文件所在目 : ' . __DIR__ . '<br>';
