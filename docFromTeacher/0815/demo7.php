<?php

namespace one;

class Index
{
    public static function show()
    {
        return __METHOD__;
    }
}

// echo two\three\Index::show() . '<br>';

// use 默认使用完全限定名称的类名/绝对路径

// echo \one\two\three\Index::show() . '<br>';



// 如果当前空间中的没有Index类,可以进一步的简化
// use  one\two\three\Index as Index;
// 如果当前类别名与原始类名相同,可以不写

// use  one\two\three\Index;
// echo Index::show() . '<br>';

// 如果当前空间中有Index类, 就不能省去as
use  one\two\three\Index as UserIndex;

echo UserIndex::show() . '<br>';

// insteadOf


// ---------------------------------

namespace one\two\three;

class Index
{
    public static function show()
    {
        return __METHOD__;
    }
}
