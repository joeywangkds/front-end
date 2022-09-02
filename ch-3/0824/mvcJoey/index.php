<?php

namespace joey;


require "config.php";

require __DIR__ . "/core/Model.php";
require __DIR__ . "/core/View.php";
require __DIR__ . "/core/Controller.php";

require __DIR__ . "/model/StaffModel.php";

extract(DATABASE);

$dsn = sprintf('%s:dbname=%s',$type,$dbname);

$model = new StaffModel($dsn,$username,$password);



// echo $type;


$c = $_GET['c'] ?? APP['default_controller'];
$a = $_GET['a'] ?? APP['default_action'];

$class = ucfirst($c).'Controller';

require __DIR__.'/controller/'.$class.'.'."php";

$view = new View();

$fullClass = __NAMESPACE__.'\\'.$class;
// echo $fullClass;

$controller = new $fullClass($model,$view);

echo $controller-> $a();

// echo $controller->$a();
// echo $c,$a;


//  $model = new IndexModel('mysql:dbname=phpedu','root','root');
// $view = new View();

// $controlloer =  new Controller($model, $view);

// echo $controlloer->index();