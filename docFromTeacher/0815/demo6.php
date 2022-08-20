<?php

namespace _0815;

// 1. 当前路径: 非限定名称, Index
// 2. 相对路径: 限定名称, two\Index
// 3. 绝对路径: 完全限定名称, \one\two\Index

namespace one;

class Index
{
    public static function show()
    {
        return __METHOD__;
    }
}

echo Index::show() . '<br>';

// 如果我在one空间中, 访问 one\two中的成员
// echo \one\two\Index::show(). '<br>';
echo two\Index::show(). '<br>';

// 空间可分层

namespace one\two;

class Index
{
    public static function show()
    {
        return __METHOD__;
    }
}
echo Index::show() . '<br>';
