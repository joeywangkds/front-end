<?php

namespace _0812;

/**
 * 类成员
 * 1. 实例成员: 用对象访问, $this->对象引用
 * 2. 静态成员 static: 用类访问, self::->类引用
 */


class User2
{
    public $username;
    private $salary;
    private $age;

    // 当前类实例的状态(属性值)应该由用户来决定,而不是由类来写死

    // 构造方法: 魔术方法, 不用用户主动调用,由某个事件或动作来触发
    // __get,__set
    // 构造方法,  实例化该类时,会自动触发
    public function __construct($username, $salary, $age, $nation = 'CHINA')
    {
        $this->username = $username;
        $this->salary = $salary;
        $this->age = $age;

        // 初始化静态属性
        self::$nation = $nation ;
    }

    // 静态成员 static
    // 静态属性
    public static $nation;
    // 静态方法
    public static function hello()
    {
        // return 'Hello,' . User2::$nation;
        // 在类中, 使用 self::来引用当前类
        return 'Hello,' . self::$nation;
    }
}



$user2 = new User2('李老师', 2800, 30);

echo $user2->username . '<br>';
echo User2::$nation . '<br>';



$user3 = new User2('猪老师', 3800, 40, '中国');

echo $user3->username . '<br>';

// echo $user3->nation . '<br>';
// 类外部,访问静态成员,使用类名称::
echo User2::$nation . '<br>';

echo User2::hello() . '<br>';
