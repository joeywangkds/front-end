<?php

namespace _0812;

/**
 * 类成员
 * 1. 实例成员: 用对象访问, $this
 * 2. 静态成员
 */

class User1
{
    // 1. 实例成员
    // (一) 属性, 变量的语法
    // public: 默认
    public $username = '张老师';
    public $role = '太太';
    // 私有, 只能在当前的类中使用
    private $salary = 3800;
    private $age = 28;

    // (二) 方法: 函数的语法
    // public function getSalary()
    // {
    // $user = new User1();
    // $this : 和当前类实例绑定
    //     return $this->salary;
    // }

    // public function getAge()
    // {
    //     return $this->age;
    // }

    // 获取器: __get(属性), 魔术方法, 双下划线开始的系统方法
    // $name: 要获取的属性名
    public function __get($name)
    {
        // 类内部: $this
        // return $this->$name;

        if ($name === 'salary') {
            if ($this->role === '太太') {
                return $this->$name;
            } else {
                return $this->$name - 1000;
            }
        }

        if ($name === 'age') {
            return $this->$name + 10;
        }
    }

    // 修改器/设置器, 魔术方法, __set(属性,值)
    public function __set($name, $value)
    {
        if ($name === 'age') {
            if ($value >= 18 && $value <= 50) {
                $this->$name = $value;
            } else {
                echo '年龄越界了';
            }
        }
    }

    // __get, __set, 成员访问非法拦截器
}


// 实例化
// 在类外部,用对象访问成员
$user1 = new User1();
// echo $user1->username , '<br>';
// // echo $user1->salary , '<br>';

// echo $user1->salary . '<br>';
echo $user1->age . '<br>';
$user1->age = 58;
echo $user1->age . '<br>';
