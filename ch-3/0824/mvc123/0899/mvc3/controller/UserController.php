<?php

// 用户管理控制器

namespace controller;

use core\Controller;

// 继承控制器基类
class UserController extends Controller
{
    public function __construct($model, $view)
    {
        parent::__construct($model, $view);
    }

    // 获取指定id的用户信息
    public function get($id)
    {
        // 1. 模型: 获取数据
        $user = $this->model->getOne($id);


        // 2. 视图: 渲染模板
        // 视图文件路径命名规则: view/控制器/方法名.php
        // $this->view->render('view/staff/index.php', ['staffs'=>$staffs]);

        $this->view->render('view/user/get.php', ['user'=>$user]);
    }
}
