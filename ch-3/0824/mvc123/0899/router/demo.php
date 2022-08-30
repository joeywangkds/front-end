<?php

// 路由的本质: 就是从url解析出控制器和方法,以及方法的参数
// 常用有二种方式:
// 1. QUERY_STRING: 查询字符串
// 2. PATH_INFO: 路径信息
// pathinfo是主流, 因为url像静态路径,具有欺骗性,有利于seo
function p($data)
{
    echo is_array($data) ? sprintf('<pre>%s</pre>', print_r($data, true)) : $data.'<br>';
}
// PATH_INFO路由

$url = 'http://phpedu.io/0899/router/demo.php/hello/world/admin?c=hello&m=world&name=peter';

// 项目根目录
// p($_SERVER['DOCUMENT_ROOT']);
// 当前文件的完整路径(绝对)
// p(__FILE__);
// 脚本在服务器上的绝对路径
// p($_SERVER['SCRIPT_FILENAME']);
// 不包括根目录的脚本名称
// p($_SERVER['SCRIPT_NAME']);
// 脚本名称 + 查询字符串
// p($_SERVER['REQUEST_URI']);
// 只获取查询字符串
p($_SERVER['QUERY_STRING']);
// 可以将querystring中解析出控制器方法和参数

// ! 1. 路由方式1: QUERY_STRING
// parse_str(queryString,$arr),将queryString解析到数组中
parse_str($_SERVER['QUERY_STRING'], $request);
p($request);
// 人为设定,第1个是控制器,第2个方法,第3个起是参数列表
$controller = array_shift($request);
$method = array_shift($request);
$params = array_shift($request);

// 测试控制器,如HelloController
class HelloController
{
    public static function world($name)
    {
        return 'Hello, '  . $name;
    }
}

// 生成控制器类名: url中是小写,需要首字母转大写,并添加Controller后缀
$controller = ucfirst($controller) . 'Controller';
echo call_user_func_array([new $controller(), $method], [$params]);

// Hello, peter
echo '<hr>';

// ! 2. 路由方式2: PATH_INFO

// PATH_INFO: 返回脚本名称到查询字符串之间的路径信息
p($_SERVER['PATH_INFO']);
// 可以将这些信息,人为的解释为控制器,方法和参数
p(explode('/', trim($_SERVER['PATH_INFO'], '/')));
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));

// 解析参数
$controller = array_shift($request);
$method = array_shift($request);
$params = array_shift($request);

// 路由测试
$controller = ucfirst($controller) . 'Controller';
echo call_user_func_array([new $controller(), $method], [$params]);

// Hello, admin
