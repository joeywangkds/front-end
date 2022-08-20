<?php

namespace one;

// 命名空间解决了:全局成员的命名冲突,借鉴了同名文件可存入在不同的目录下面

class Demo1
{
    public static string $name = 'admin';
}

// 当存在命名空间时, 全局成员应该使用完整的名称
// 完整类名 = 空间名称\类名
// ::class 获取类的完整名称
echo Demo1::class . '<br>';

echo \two\Demo1::$name;

namespace two;

class Demo1
{
    public static string $name = '猪老师';
}

echo Demo1::class . '<br>';

// 跨空间访问
// echo one\Demo1::$name;

// 跨空间访问时,必须从根空间/全局空间开始查询: \
echo \one\Demo1::$name;
// 实际访问的是: 'two\one\Demo1'
