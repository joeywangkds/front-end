<?php
namespace _0810;
// 再谈数组遍历

// 1. 指针遍历: 内部指针
$stu = ['id' => 1, 'name' => 'Jack', 'course' => 'php', 'score' => 90];
// 数组内部指针默认指向第一个元素, 'id'=>1
// 查看当前(即第一个数组成员)
// key():当前键名, current(): 当前值
printf('[ %s ] => %s<br>', key($stu), current($stu));
// 指针后移,指向下一个成员
next($stu);
printf('[ %s ] => %s<br>', key($stu), current($stu));
next($stu);
printf('[ %s ] => %s<br>', key($stu), current($stu));
next($stu);
printf('[ %s ] => %s<br>', key($stu), current($stu));
// 前移
prev($stu);
printf('[ %s ] => %s<br>', key($stu), current($stu));
// 结尾
end($stu);
printf('[ %s ] => %s<br>', key($stu), current($stu));
// 重置,即指向第一个
reset($stu);
printf('[ %s ] => %s<br>', key($stu), current($stu));

echo '<hr>';

// 2. 自动遍历
if (count($stu) > 0) {
    while (true) {
        printf('[ %s ] => %s<br>', key($stu), current($stu));
        if (next($stu)) {
            continue;
        } else {
            break;
        }
    }
} else {
    echo '空数组';
}

echo '<hr>';

// 5. 快捷遍历
foreach ($stu as $key => $value) {
    printf('[ %s ] => %s<br>', $key, $value);
}
// 其实foreach非常强大, 还可以遍历对象

echo '<hr>';

// 4. 解构遍历

// list($a,$b...) = [1,2,...]: 数组成员解构到变量中
// 索引数组
list($id, $name) = [10, 'Tony'];
printf('$id = %s, $name = %s<br>', $id, $name);
// 关联数组
list('id' => $id, 'name' => $name) = ['id' => 5, 'name' => 'Peter'];
printf('$id = %s, $name = %s<br>', $id, $name);

echo '<hr>';

// 解构遍历,借助foreach
$users = [
    ['id' => 5, 'name' => 'Mike'],
    ['id' => 8, 'name' => 'John'],
    ['id' => 14, 'name' => 'Jerry'],
];

foreach ($users as list('id' => $id, 'name' => $name)) {
    printf('$id = %s, $name = %s<br>', $id, $name);
}
