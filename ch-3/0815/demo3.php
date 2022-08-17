<?php


interface iUser{

    const NATION = 'Chine';

    public function m1();

    public function m2();
}


class Demo1 implements iUser{
    public function m1(){

    }

    public function m2(){

    }

}

abstract class Demo2 implements iUser{
    public function m1()
    {
        # code...
    }
}