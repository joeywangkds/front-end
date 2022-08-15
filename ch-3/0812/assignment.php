<?php

class Shoe{
    public $brand;
    public $signiture;
    public static $size;


    public function __construct( string $brand, string $signiture, $size = 42)
    {
        
        $this->brand = $brand;
        $this->signiture = $signiture;
        self::$size = $size;
    }

    public function displayAllInfo()
    {
        return 'The new shoe size is '.self::$size.' and it\'s brand is '.$this->brand.' and the signiture is '.$this->signiture;
    }
    
}


$kyrie8 = new Shoe('nike','kyrie');

echo $kyrie8->displayAllInfo();


// foreach($kyrie8 as $detail){
    
// }
