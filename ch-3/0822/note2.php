<?php

namespace _0822;

session_start();

// echo ini_get('session.save_path');
$_SESSION['email'] = 'php@test.com';
$_SESSION['password'] = md5('theTempPass');

// session_destroy();

echo 12 & 5;