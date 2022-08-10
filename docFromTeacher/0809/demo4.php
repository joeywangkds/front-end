<?php

namespace _0809;

// 循环的本质还是分支

$colors = ['red', 'green','blue'];

$i = 0;

echo '数组长度: ' , count($colors) , '<br>';

$list = '<ul style="border:1px solid">';

if ($i < count($colors)) {
    $list .= "<li>{$colors[$i]}</li>";
}

// $i = $i + 1;
// $i += 1;
$i++;

if ($i < count($colors)) {
    $list .= "<li>{$colors[$i]}</li>";
}


$i++;

if ($i < count($colors)) {
    $list .= "<li>{$colors[$i]}</li>";
}


// $i++;

// if ($i < count($colors)) {
//     $list .= "<li>{$colors[$i]}</li>";
// }



$list .= '</ul>';

echo $list;

/**
 * 循环三要素
 * 1. $i = 0,初始化
 * 2. $i < count($colors), 循环条件
 * 3. $i++, 更新循环条件, 否则进入死循环
 */


$list = '<ul style="border:1px solid red">';
// 1. $i = 0,初始化
$i = 0;
// 2. $i < count($colors), 循环条件

// 入口判断
// while ($i < count($colors)) {
//     $list .= "<li>{$colors[$i]}</li>";
//     // 3. $i++, 更新循环条件
//     $i++;
// }

// 出口判断, 条件为false,也会执行一遍
do {
    $list .= "<li>{$colors[$i]}</li>";
    // 3. $i++, 更新循环条件
    $i++;
} while ($i < count($colors));


$list .= '</ul>';

echo $list;

// for -> while的语法糖, 简化方案

$list = '<ul style="border:1px solid green">';

for ($i = 0;$i < count($colors);$i++) {
    // if ($i > 1) {
    //     break;
    // }

    // continue: 跳过某次循环,提前进入下一次
    if ($i === 1) {
        continue;
    }
    $list .= "<li>{$colors[$i]}</li>";
}

$list .= '</ul>';

echo $list;
