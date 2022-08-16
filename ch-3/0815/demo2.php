<?php

class Person{
    // public $email = 'test@test.con';
    private $id = '123';

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getInfo(){
        return $this->name;
    }
}

class Student extends Person{



}

$stu = new Student('Joey');

echo $stu -> getInfo();