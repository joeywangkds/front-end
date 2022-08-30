<?php

// 自定义控制器: 员工管理控制器

namespace controller;

use core\Controller;

// 继承控制器基类
class StaffController extends Controller
{
    public function __construct($model, $view)
    {
        parent::__construct($model, $view);
    }

    // 默认方法: 列出所有数据
    public function index()
    {
        // 1. 模型: 获取数据
        $staffs = $this->model->getAll(10);


        // 2. 视图: 渲染模板
        // 视图文件路径命名规则: view/控制器/方法名.php
        $this->view->render('view/staff/index.php', ['staffs'=>$staffs]);
    }
}
