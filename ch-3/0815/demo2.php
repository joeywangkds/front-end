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

    private string $lesson;
    private int $score;

    public function __construct($name, $lesson, $score)
    {
        parent::__construct($name);
        $this->lesson = $lesson;
        $this->score = $score;
    }

    public function getStudentInfo():string
    {
        //  printf ('%s %s %s', $this->name, $this->lesson, $this->score);

        return parent::getInfo().','.$this->lesson.','.$this->score;
        //  var_dump($this->score) ;
    }


}

$stu = new Student('Joey','art','100');

echo $stu -> getStudentInfo();