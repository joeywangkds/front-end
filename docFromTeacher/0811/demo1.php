<?php

namespace _0811;

$stu = ['id' => 1, 'name' => 'Jack', 'course' => 'php', 'score' => 90];

// key(): 当前键名
// current(): 当前值
// printf('[ %s ] => %s<br>', key($stu), current($stu));
// next(): 指针前移
// next($stu);
// printf('[ %s ] => %s<br>', key($stu), current($stu));

// next($stu);
// printf('[ %s ] => %s<br>', key($stu), current($stu));

// next($stu);
// printf('[ %s ] => %s<hr>', key($stu), current($stu));

// prev(): 指针后移
// prev($stu);
// printf('[ %s ] => %s<br>', key($stu), current($stu));

// reset(): 指针重置,指向第一个
// reset($stu);
// printf('[ %s ] => %s<br>', key($stu), current($stu));

// end(): 指针指向最后一个
// end($stu);
// printf('[ %s ] => %s<hr>', key($stu), current($stu));

// for / foreach
// reset($stu);

// if (count($stu) > 0) {
//     while (true) {
//         printf('[ %s ] => %s<br>', key($stu), current($stu));
//         if (next($stu)) {
//             continue;
//         } else {
//             break;
//         }
//     }
// } else {
//     echo '空数组';
// }
// echo '<hr>';

// foreach
// $key = key(), $value=>current()
foreach ($stu as $key=>$value) {
    printf('[ %s ] => %s<br>', $key, $value);
}

echo '<hr>';

// 解构
// 索引数组解构
list($name, $price) =['手机', 5000];
echo $name, ', ', $price , '<br>';

// 关联数组解构
list('name'=>$name, 'price'=>$price) =['name'=>'电脑','price'=> 9000];
echo $name, ', ', $price , '<br>';

extract(['name'=>'相机','price'=> 19000]);
echo $name, ', ', $price , '<hr>';

// foreach + list
// 用二维数组来模拟数据表查询结果
$users = [
    ['id' => 5, 'name' => 'Mike'],
    ['id' => 8, 'name' => 'John'],
    ['id' => 14, 'name' => 'Jerry'],
];

foreach ($users as $user) {
    vprintf('id = %s, name = %s<br>', $user);
}

echo '<hr>';

//  list('id'=>$id,'name'=>$name)=['id' => 5, 'name' => 'Mike']
foreach ($users as  list('id'=>$id, 'name'=>$name)) {
    printf('id = %s, name = %s<br>', $id, $name);
}
