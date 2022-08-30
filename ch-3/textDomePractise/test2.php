<?php

function unique_names(array $array1, array $array2) : array
{
    
    $newArray = array_merge($array1,$array2);
    return $arr = array_unique($newArray);
}

$names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia

// var_dump($names);