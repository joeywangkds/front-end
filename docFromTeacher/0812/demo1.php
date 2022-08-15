<?php

namespace _0812;

// 文件包含

// 本质,将外部文件的内容,插入到当前的位置

// include

// 相对路径
// include 'inc/f1.php';
// C:\Users\Administrator\Desktop\20\ch-3\0812\inc\f1.php
// echo __DIR__ . DIRECTORY_SEPARATOR .'inc'. DIRECTORY_SEPARATOR.'f1.php'.'<br>';
// 绝对路径
// include __DIR__ . '/inc/f1.php';

// 与当前脚本共用一个作用域

/** @var $username */
// echo $username . '<br>';

// $user = include __DIR__ . '/inc/f11.php';

// list('username'=>$username, 'email'=>$email)=$user;

// echo $username, ', ' , $email , '<br>';
// echo join(', ', $user);
// vprintf('%s, %s', $user);

// echo '<h1>Hello php.cn</h1>';

// require



// if (file_exists(__DIR__ . '/inc/f12.php')) {
//     require __DIR__ . '/inc/f12.php';
// } else {
//     exit('文件不存在');
// }

require __DIR__ . '/inc/f12.php';

echo $username;

// die('程序中断');
// exit('xxxx');

echo '<h1>Hello php.cn</h1>';

// include, require,功能一样,区别在于出错的处理上
// include: 忽略错误,继续执行后面代码, require,直接退出
