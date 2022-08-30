<?php

namespace core;

// 路由器类
class Router
{
    public static function parse(): array
    {
        // 默认控制器,实际项目,应该来自配置文件,而不是在写死
        $controller = 'Index';
        $action = 'index';
        // 参数列表
        $params = [];

        // 判断是否存在pathinfo
        if (array_key_exists('PATH_INFO', $_SERVER) && $_SERVER['PATH_INFO'] !== '/') {
            // 为什么要判断 $_SERVER['PATH_INFO'] !== '/' ?
            // 因为: admin.php/ 时,$_SERVER['PATH_INFO'] = '/', 导致解析控制器失败
            $pathinfo = array_filter(explode('/', $_SERVER['PATH_INFO']));
            // dump($pathinfo);
            // 考虑到index.php/ 情况, 这时pathinfo为空数组
            if (count($pathinfo) >= 2) {
                $controller = array_shift($pathinfo);
                $action = array_shift($pathinfo);
                $params = $pathinfo;
            } else {
                $controller = array_shift($pathinfo);
            }
        }

        // 查看控制器,方法,参数
        // dump($controller, $action, $params);

        // 将这些数据返回出去
        return [$controller, $action, $params];
    }
}
