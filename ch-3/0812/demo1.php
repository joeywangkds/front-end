<?php

namespace _0812;



include __DIR__.DIRECTORY_SEPARATOR.'\inc\f1.php';

echo "<h1>".$username."</h1>";

class User{
    public $username = "Joey";
    private $salary = 1000;
    private $age = 15;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
  
}

$newUser1 = new User();

echo $newUser1->username." number is  ".$newUser1->salary.", age is ".$newUser1->age;
echo "<hr>";
$newUser1->age = 19;

echo $newUser1->username." number is  ".$newUser1->salary.", age is ".$newUser1->age;