<?php

namespace _0811;

// 查询与替换
// array_slice() 取出一部分成员
$stu = [
    'id' => 101,
    'name' => '无忌',
    'age' => 20,
    'course' => 'php',
    'grade' => 80
];
$res = array_slice(
    $stu,
    -4,
    3
);
printf('<pre>%s</pre>', print_r($res, true));

// array_splice(): 增删改
$arr = [10, 28, 9, 33, 56, 21, 82, 47];
printf('原始数组元素: <pre>%s</pre>', print_r($arr, true));

// 默认功能是: 删除
// $res=array_splice($arr, 1, 2);

// 替换
// $res=array_splice($arr, 1, 2, [666,999]);

// 增加
$res=array_splice($arr, 1, 0, [666,999]);


printf('<pre>%s</pre>', print_r($res, true));
printf('<pre>%s</pre>', print_r($arr, true));
