<?php


// 变量命名与js的规则是一样

namespace _0809;

// 变量赋值

// 1. 默认: 值传递
$username = '猪老师';

// 更新
$myName = $username;

printf('$username = %s | $myName = %s <hr>', $username, $myName);

// -----------------------

// 2. 引用传递
// 变量前: & 取地址符, 表示引用
// $yourName = $username;
$yourName = &$username;

$yourName = '张老师';

printf('$username = %s | $yourName = %s <br>', $username, $yourName);


// 引用传递, 会同步更新原始变量,因为你引用是同一个变量
// "其实引用传递,并没有创建新变量", 而是给原变量,起了一个别名
// 例如,提到川建国, 大家都知道指的是美丽国前总统特朗普,当然,懂王也是它
// 所以, 可以给同一个变量, 起多个别名,是完全可以的, 大家可以试试看
