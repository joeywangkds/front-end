<?php

namespace _0815;

// 接口: 升级版的"抽象类"

// 接口类
interface iUser
{
    // 常量
    public const NATION = 'CHINA';

    // 方法: public
    public function m1();
    public function m2();
}

// 工作类: 实现了接口的类
class Demo1 implements iUser
{
    // 接口的抽象方法,必须在工作类中全部实现
    public function m1()
    {
    }
    public function m2()
    {
    }
}


// 如果实现类仅实现了接口的一部分抽象方法,应该声明为抽象类
abstract class Demo2 implements iUser
{
    public function m1()
    {
    }
}

class Demo3 extends Demo2
{
    public function m2()
    {
    }
}

// php是单继承
interface A
{
}
interface B
{
}
interface C
{
}

// Test类,同时从三个接口中获取成员,间接实现了"多继承"
class Test implements A, B, C
{
}


interface iDb
{
    // insert
    public static function insert(array $data);

    // update
    public static function update(array $data, string $where);

    // delete
    public static function delete(string $where);

    // select
    public static function select(array $options);
}

abstract class aDb
{
    // insert
    public static function insert(array $data)
    {
    }

    // update
    public static function update(array $data, string $where)
    {
    }

    // delete
    public static function delete(string $where)
    {
    }
}

class Db extends aDb
{
}
