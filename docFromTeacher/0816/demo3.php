<?php

namespace admin;

// 自动加载器
// index.php入口文件
require 'autoloader.php';

use admin\controller\Demo1;
use admin\controller\Demo2;
use admin\controller\Demo3;

echo Demo1::index(). '<br>';
echo Demo2::index(). '<br>';
echo Demo3::index(). '<br>';
