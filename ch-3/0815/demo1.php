<?php


Class User{
    private array $data = ['age' =>20,];

    public function __get($name)
    {
        if(array_key_exists($name, $this->data)){
            $result = $this->data[$name];
        }else{
            $result = '$name is not exist';

        }
        
        return $result;
    }

    public function __call($name, $arguments)
    {
        
    }

}

$user = new User;

echo $user->age;