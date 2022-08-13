<?php

namespace _0811;

$arr = [
    150,
    'php',
    true,
    [4, 5, 6],
    (new class () {
    }),
    [],
    null,
    false,
    '',
    0,
    '0'
];

// array_filter(),只返回数组中为true的元素组成的数组
$res = array_filter($arr, function ($item) {
    // return $item;
    // 只返回标量/基本数据类型
    return is_scalar($item);
});

// php自动转为false的值: null, false, 空数组, 空字符串, 0, '0'
// 提示: 空对象不能转为false, 但是空数组是false

printf('<pre>%s</pre>', print_r(array_filter($res), true));

// array_map() 对每个成员 ,做回调处理,返回新数组

$arr = [
    'php',
    [3, 4, 5],
    (new class () {
        public string $name = '电脑';
        public int $price = 8888;
    }),
    15,
    20
];

// 拉平

$res = array_map(function ($item) {
    switch (gettype($item)) {
        case 'array':
            $item = implode(', ', $item);
            break;

        case 'object':
            $item = implode(',', get_object_vars($item));
            break;
    }
    return $item;
}, $arr);

printf('<pre>%s</pre>', print_r($res, true));


// array_reduce(): 迭代/归并处理函数

$arr = [1,2,3,4,5,6];

echo array_sum($arr), '<br>';

$res = array_reduce($arr, function ($acc, $cur) {
    echo $acc, ', ' , $cur, '<br>';

    return $acc + $cur;
}, 10);

echo $res . '<hr>';

// array_walk(): 使用自定义函数进行回调处理,返回布尔值

// 主要用于数组成员 的格式化, 不受数组指针影响
$res = ['id' => 10, 'name' => 'admin', 'email' => 'admin@php.cn'];
// array_walk(数组, 回调,回调的第三个数组的默认值)


array_walk($res, function ($value, $key, $color) {
    printf('[ %s ] => <span style="color:%s">%s</span><br>', $key, $color, $value);
}, 'red');
