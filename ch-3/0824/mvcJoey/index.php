<?php

namespace joey;


require __DIR__ . "/model/Model.php";
require __DIR__ . "/view/View.php";
require __DIR__ . "/controller/Controller.php";


$model = new Model('mysql:dbname=phpedu','root','root');
$view = new View();

$controlloer =  new Controller($model, $view);

echo $controlloer->index();