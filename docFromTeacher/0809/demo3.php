<?php

namespace _0809;

// 流程控制: 分支
$age = 20;

// 单分支
if ($age >= 18) {
    echo '已成年,可以观看<br>';
}

// 双分支

$age = 15;
if ($age >= 18) {
    echo '已成年,可以观看<br>';
} else {
    // 默认分支
    echo '未成年,请在父母陪同下观看<br>';
}

// 双分支语法糖: 三元运算符
// 条件 ? true : false
echo $age >= 18 ? '已成年,可以观看<br>' : '未成年,请在父母陪同下观看<br>';

// 多分支
$age = 120;

if ($age >= 18 && $age < 30) {
    echo "{$age}岁,彩礼,能按揭吗?<br>";
} elseif ($age >= 30 && $age < 45) {
    echo "{$age}岁,应该成个家了<br>";
} elseif ($age >=  45 && $age < 100) {
    echo "{$age}岁,房贷快还完了<br>";
} elseif ($age >=  100 || $age <= 6) {
    echo "{$age}是一个非法年龄<br>";
} else {
    // 默认分支
    echo "{$age}岁,放学,我送你回家<br>";
}


// 多分支语法糖 switch
$age = 13;
switch (true) {
    case  $age >= 18 && $age < 30:
        echo "{$age}岁,彩礼,能按揭吗?<br>";
        break;

    case  $age >= 30 && $age < 45:
        echo "{$age}岁,应该成个家了<br>";
        break;

    default:
        echo "{$age}岁,放学,我送你回家<br>";

}

/**
 * 分支
 * 1. 单分支
 * 2. 双分支: 三元
 * 3. 多分支: switch
 */
