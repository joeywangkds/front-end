<?php

namespace joey;

class View
{
    protected $controller;
    protected $action;
    protected $path;
    //模板变量
    protected $data = [];

    public function __construct($controller, $action, $path = '/view/')
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->path = $path;
    }

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
        // var_dump($this->data[$name]);
        // var_dump($this->data) ;
    }

    public function render($path = '',$name = null, $value = null)
    {
        if($name && $value) $this->assign($name,$value);
        
        extract($this->data);
        if (empty($path)) {
            $file = __DIR__ . $this->path . $this->controller . '/' . $this->action . '.php';
            echo $file;
        } else {
            $file = $path;
        }
        file_exists($file) ? include $file : die('文件不存在');
    }
}
// echo"<hr>";
// echo __DIR__;
// echo"<hr>";

$controller = 'user';
$action = 'hello';


$view = new View($controller, $action);

$view->assign('username', 'joey');

$view->render('','courses',['php','java','js']);
