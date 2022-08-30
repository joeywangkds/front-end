<?php

namespace _0823;

require "vendor/autoload.php";

extract(require "config/database.php");

$db = new Db($dsn,$username,$password);

$user = $db->select('SELECT * FROM `staff`');

printf("<pre>%s<pre>",print_r($user,true));