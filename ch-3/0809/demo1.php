<?php


namespace _0809;

$username = 'Joey';

printf('$username = %s', $username);

$youName = $username;

$youName = 'Wang';

echo "<hr>";

printf('$username = %s'." and ". '$username = %s' ,$youName, $username);


echo "<hr>";

function hello(string $name, int $salary):string
{
    return 'hello, '. $name. ' salary is '. $salary;
}

// print_r(hello('Mr.wang',10000));

echo call_user_func('\\_0809\\hello', 'Mr.wang',10000);

// // echo hello('Mr.wang',10000);




// $newUser =['Mr.Li',20000]; 



// echo "<hr>";

// echo call_user_func_array( 'hello', $newUser);


// function increment(&$var)
// {
//     $var++;
// }

// $a = 0;
// call_user_func('increment', $a);
// echo $a."\n";