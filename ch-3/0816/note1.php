<?php

namespace _0816 ;


class A{
    public static function hello()
    {
        return __METHOD__;
    }
}

class B extends A{
    
}

// echo B::hello();

// echo call_user_func([B::class, "hello"]);


interface iA{
    public static function hello();

}

interface iB{
    public static function world();

}

class work implements iA, iB{

    public static function hello(){
        return __METHOD__;
    }

    public static function world(){
        return __METHOD__;
    }

}

// echo work::hello();

echo call_user_func([work::class,'hello']);

echo "<hr>";

trait tA{
    public static function hello(){
        return __METHOD__;
    }
}

class work2{
    use tA;
}

echo work::hello();
