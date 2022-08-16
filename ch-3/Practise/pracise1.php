<?php

class Demo1{
    private array $data = ['age'=>20];

     public function __get($name)
     {
        // if(array_key_exists($name, $this->data)){
        //     return $this->data['age'];
        // }else{
        //     return "age is not exist";
        // }
        array_key_exists($name, $this->data)?$this->data['age']:"age is not exist"; 
     }
 
     public function getUserInfo($name, $arguments)
     {
        # code...
     }


     public function __call($name, $arguments)
     {
        printf('The function name is : %s, and the info is <pre>%s</pre>',$name,$arguments);
        var_dump($arguments);
        
     }

}

$obj = new Demo1();
// echo $obj->age;

$obj2 = new Demo1();

$obj2->hello(20);



