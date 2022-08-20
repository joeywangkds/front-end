<?php

// insteadOf: trait中解决命名冲突

// trait : 一个特殊的类

namespace __0816;

// php默认是单继承
// 项目不大, 不想用接口实现多继承
// 又不想用父类,子类这样的继承方式来增加项目复杂度
// 可以试这个"迷你"版的基类, trait
// trait 可以看成是一个通用组件库,
// trait 插入到任何一个类中, 来扩展这个类的功能

// 1. 经典的类继承
class A
{
    public static function hello()
    {
        return __METHOD__;
    }
}
class B extends A
{
}


// echo B::hello();
// __0816\B
// echo B::class;
echo call_user_func([B::class, 'hello']) . '<hr>';

// 2. 接口间接实现了多继承
interface iA
{
    public static function hello();
}

interface iB
{
    public static function world();
}

class W implements iA, iB
{
    public static function hello()
    {
        return __METHOD__;
    }

    public static function world()
    {
        return __METHOD__;
    }
}
echo call_user_func([W::class, 'hello']) . '<br>';
echo call_user_func([W::class, 'world']) . '<hr>';

// 3. trait


trait tA
{
    public static function hello()
    {
        return __METHOD__;
    }
}

trait tB
{
    public static function world()
    {
        return __METHOD__;
    }
}



class W1
{
    use tA;
    use tB;
}

echo call_user_func([W1::class, 'hello']) . '<br>';
echo call_user_func([W1::class, 'world']) . '<hr>';

// 4. trait 优先级
// parent < trait < this
class P
{
    public static function hello()
    {
        return __METHOD__;
    }
}


trait tC
{
    public static function hello()
    {
        return __METHOD__;
    }
}


class S extends P
{
    use tC;
    public static function hello()
    {
        return __METHOD__;
    }
}
echo call_user_func([S::class, 'hello']) . '<hr>';

// 5. trait 命名冲突


trait t1
{
    public static function hello()
    {
        return __METHOD__;
    }
}

trait t2
{
    public static function hello()
    {
        return __METHOD__;
    }
}

class W3
{
    // use t1;
    // use t2;

    use t1,t2 {
        t1::hello as t2;
        t2::hello insteadof t1;
    }
}
echo call_user_func([W3::class, 'hello']) . '<hr>';

// 6. trait 优化


trait t3
{
    public static function hello()
    {
        return __METHOD__;
    }
}

trait t4
{
    public static function world()
    {
        return __METHOD__;
    }
}


trait t5
{
    public static function say()
    {
        return __METHOD__;
    }
}

trait t6
{
    public static function ok()
    {
        return __METHOD__;
    }
}

trait importAll
{
    use t3;
    use t4;
    use t5;
    use t6;
}


class W4
{
    // use t3;
    // use t4;
    // use t5;
    // use t6;

    use importAll;

    // css: @import .....
}

echo call_user_func([W4::class, 'hello']) . '<br>';
echo call_user_func([W4::class, 'world']) . '<br>';
echo call_user_func([W4::class, 'say']) . '<br>';
echo call_user_func([W4::class, 'ok']) . '<hr>';
