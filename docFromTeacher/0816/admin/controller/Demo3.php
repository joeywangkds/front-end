<?php

// 为了实现自动加载,应该遵循一些约定
// 1. 一个文件只有一个类
// 2. 这个类名和文件名必须一致
// 3. 这个类的命名空间,必须映射到类文件所在的路径

namespace admin\controller;

class Demo3
{
    public static function index()
    {
        return __METHOD__;
    }
}
