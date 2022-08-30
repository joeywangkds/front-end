<?php

// 带路由解析功能的框架的入口文件

namespace mvc3;

use controller\UserController;
use core\Router;
use model\UserModel;
use core\View;

// 1. 类的自动加载器
require __DIR__ . '/core/autoload.php';

$model = new UserModel('mysql:dbname=phpedu', 'root', 'root');
$view = new View();

// 2. 路由解析
$request = Router::parse();
// echo '<pre>'. print_r($request, true) . '</pre>';

// 2. 实例化控制器
$controller = array_shift($request);
$method = array_shift($request);
$params = array_shift($request);

$controller = 'controller\\'.ucfirst($controller) . 'Controller';
$user = new $controller($model, $view);

// 3. 执行控制器默认方法
// $user->get();

// 只需要改变url尾部的id,即可更新查询
// http://phpedu.io/0899/mvc3/index.php/user/get/3
call_user_func_array([$user,'get'], $params);
