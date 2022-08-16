<?php

class Demo1{
    private array $data = ['age'=>20];

     public function __get($name)
     {
        if(array_key_exists($name,$this.data->name)){
            
        }
     }
 


}