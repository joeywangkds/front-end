<?php

// 数组遍历

namespace _0809;

// $colors = ['red', 'green', 'blue'];
// printf('<pre>%s</pre>', print_r($colors, true));

// 1. 索引数组: 键名默认是从0开始的递增的正整数(数值类型)
// 完整的声明语法
// $colors = ['0'=>'red', '1'=>'green', '2'=>'blue'];
// 用了默认的键名, 可以不写的
$colors = ['red', 'green', 'blue'];
// printf('<pre>%s</pre>', print_r($colors, true));
// echo $colors[1];

// 2.关联数组: 键名是字符串(语义化)
// $user = ['0'=>5,'1'=>'猪老师', '2'=>88];
$user = [0=>5,1=>'猪老师', 2=>88];

$user = ['id'=>5,'name'=>'猪老师', 'score'=>88];

// printf('<pre>%s</pre>', print_r($user, true));
// echo $user['name'] . '<br>';

// $arr[$key]
// $key: 数值->索引数组
// $key: 字符串->关联数组
// echo '<hr>';

// 数组的遍历: while, for
// 数组的专用遍历语法: foreach
// foreach ($arr as $key=>$value) {...}
// foreach ($colors as $value) {
//     echo $value . '<br>';
// }


// foreach ($colors as $key => $value) {
//     printf('[%s] => %s <br>', $key, $value);
// }
// echo '<hr>';

// foreach ($user as $key => $value) {
//     printf('[%s] => %s <br>', $key, $value);
// }


// 二维数组
// 因为从数据表中的查询结果,php用二维数组来表示

// gender: 0男,1女
$users = [
    0=>['id'=>5,'name'=>'猪老师', 'gender'=>0, 'score'=>88],
    1=>['id'=>6,'name'=>'张老师', 'gender'=>1,'score'=>68],
    2=>['id'=>7,'name'=>'狗老师','gender'=>1, 'score'=>98],
];
// printf('<pre>%s</pre>', print_r($users, true));

// foreach + table 渲染到页面

$table = '<table border="1" width="400" cellspacing="0" cellpadding="3" align="center">';
$table .= '<caption>用户信息表</caption>';
$table .= '<thead bgcolor="#ccc"><tr><th>ID</th><th>用户名</th><th>性别</th><th>年龄</th></tr></thead>';
$table .= '<tbody align="center">';

// 遍历
foreach ($users as $user) {
    // print_r($user);
    $table .= '<tr>';
    $table .= "<td>{$user['id']}</td>";
    $table .= '<td>'.$user['name'].'</td>';
    $table .= '<td>'.($user['gender'] ? '女' : '男').'</td>';
    $table .= '<td>'.$user['score'].'</td>';
    $table .= '</tr>';
}


$table .= '</tbody>';
$table .= '</table>';

// 打印表格到页面中
echo $table;
