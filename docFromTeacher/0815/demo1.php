<?php

namespace _0815;

/**
 * 1. 属性重载: __get(),__set()
 * 2. 方法重载:__call($name,$args), __callStatic($name,$args)
 */

// 封装, 重载, 继承
class User
{
    // private: 私有, 封装
    // $data : 容器/数组来表示
    private array $data = [
        'age' => 20,
    ];

    // 查询接口/属性拦截器/魔术方法/属性重载
    public function __get($name)
    {
        // $result = null;
        // if ()) {
        //     $result = $this->data[$name];
        // } else {
        //     $result = "$name 属性不存在";
        // }

        // 三元
        // return array_key_exists($name, $this->data) ? $this->data[$name] : "$name 属性不存在";

        $condition = array_key_exists($name, $this->data);
        return $condition ? $this->data[$name] : "$name 属性不存在";




        // 有些编辑器, 对于多个return 会有警告
        // return $result;
    }

    // __set($name,$value): 大家自己测试一下

    // 可以自动拦截对于方法的非法访问
    public function __call($name, $args)
    {
        // 第一个参数是方法名称
        // 第二个参数是以数组表示的参数列表
        printf('方法名: %s<br>参数列表: <pre>%s</pre>', $name, print_r($args, true));
    }

    // 拦截静态方法的非法请求
    public static function __callStatic($name, $args)
    {
        // 第一个参数是方法名称
        // 第二个参数是以数组表示的参数列表
        printf('方法名: %s<br>参数列表: <pre>%s</pre>', $name, print_r($args, true));
    }
}

$user = new User();
echo $user->age . '<br>';

// 非静态方法, 类实例来访问
$user->hello('猪老师', '498668472');

// 静态方法, 类访问
User::world(100, 200);


// ThinkPHP, 查询构造器, 数据库操作
// 查询方法库
class Query
{
    // 当这个查询类实例化时,应该自动连接数据库
    // public function __construct()
    // {
    //     self::connect();
    // }

    public function table($table)
    {
        return $this;
    }

    public function where($table)
    {
        return $this;
    }

    public function find()
    {
    }
}


// 查询入口类
class Db
{
    public static function __callStatic($name, $arguments)
    {
        // 所有查询操作在此完成,单入口查询
        return call_user_func_array([new Query(), $name], $arguments);
    }
}


Db::table('think_user')->where('id', 1)->find();
