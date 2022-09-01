<?php


namespace joey;

// error_reporting(E_ALL & ~E_NOTICE);

class View
{
    public function display($data)
    {

        

        $staffs = $data;

        include "show.php";
        
        
    }
}
