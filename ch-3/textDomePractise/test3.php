<?php

function make_pipeline(...$funcs)
{


    return function ($arg) use ($funcs) {

        // print_r($funcs[0](3));
        //    return make_pipeline($arg);
        foreach ($funcs as $func){
            $arg = $func($arg);
        }
        
        return $arg ;

    };
   
}

$fun = make_pipeline(
    function ($x) {
        return $x * 3;
    },
    function ($x) {
        return $x + 1;
    },
    function ($x) {
        return $x / 2;
    }
);
echo $fun(3); # should print 5