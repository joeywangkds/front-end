<?php

namespace joey;

class Controller
{
    protected $model;
    protected $view;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }


    public function index()
    {
        $data = $this->model->getAll(20);
        $this->view->display($data);
    }
}
