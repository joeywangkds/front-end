<?php

namespace core;

// 抽象类, 必须通过子类才可访问
abstract class Controller
{
    // 1. 模型对象
    protected $model;

    // 2. 视图对象
    protected $view;

    // 3. 实例化,初始化模型与视图对象
    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }
}
