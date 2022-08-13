<?php

namespace _0811;

$arr = [30, 4, 82, 15, 20, 'abc', 'hello', 2, 46];
printf('<pre>%s</pre>', print_r($arr, true));

// 1. 值排序
// 默认排序: 升序
// sort($arr);
// 保持键名
// asort($arr);
// 降序
// rsort($arr);
// 保持键名
// arsort($arr);

// 2. 键排序
// ksort($arr);
// krsort($arr);

$arr = [90,33,2,184, 24, 3];
usort($arr, function ($a, $b) {
    // return $a - $b;
    // 降序
    return $b - $a;
});
printf('<pre>%s</pre>', print_r($arr, true));

// 打乱
shuffle($arr);
printf('<pre>%s</pre>', print_r($arr, true));
