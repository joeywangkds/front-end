<?php

function p($name){

    $type = gettype($name);

    switch (strtolower($type)){
        case 'string':
        case 'double':
        case 'float':
            echo $name."<br>";
            break;

        case 'boolean':
        case 'null':
            echo var_dump($name)."<br>";
            break;
        case 'array':
        case 'object':
            printf('<pre>%s</pre>',print_r($name,true));
            break;
    }

}