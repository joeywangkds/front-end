<?php

// 框架的入口文件

namespace mvc2;

use controller\StaffController;
use model\StaffModel;
use core\View;

// require __DIR__ . '/core/View.php';
// require __DIR__ . '/core/Model.php';
// require __DIR__ . '/core/Controller.php';
// require __DIR__ . '/Model/StaffModel.php';
// require __DIR__ . '/controller/StaffController.php';

// 1. 类的自动加载器
require __DIR__ . '/core/autoload.php';

$model = new StaffModel('mysql:dbname=phpedu', 'root', 'root');
$view = new View();

// 2. 实例化staff控制器
$staff = new StaffController($model, $view);

// 3. 执行控制器默认方法
$staff->index();
