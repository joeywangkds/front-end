<?php

// 注册类的自动加载器方法
spl_autoload_register(function ($class) {
    require str_replace('\\', '/', $class) . '.php';
});
