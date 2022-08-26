<?php

namespace _0822;


setcookie('site', 'testsite');

// echo $_COOKIE['site'] ?? 'not yet set' . "<hr>";


setcookie('user[name]', 'admin');
setcookie('user[email]', 'admin@test.com');
setcookie('user[age]', '20');

if (isset($_COOKIE['user'])) {
    foreach ($_COOKIE['user'] as $key => $value) {
        printf('[%s]=>%s', $key, $value."<br>");
    }
} else {
    echo "not set";
}
