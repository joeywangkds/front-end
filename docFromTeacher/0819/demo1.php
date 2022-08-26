<?php

namespace _0819;

// fetch + while
// fetchAll + foreach
// bindValue: 值绑定到变量上
// bindParam: 引用绑定到变量上
// bindColumn: 将字段绑定到变量上

use PDO;

// 连接
$db = new PDO('mysql:dbname=phpedu', 'root', 'root');

$sql = <<< SQL
    SELECT `id`,`name`,`sex`,`email`
    FROM `staff`;
SQL;
// sql语句对象
$stmt = $db->prepare($sql);
// 执行sql
$stmt->execute();

// while,foreach, list()进行结果数组的解构到变量中
$stmt->bindColumn('id', $id);
$stmt->bindColumn('name', $name);
$stmt->bindColumn('sex', $sex);
$stmt->bindColumn('email', $email);

// 用表格进行格式化打印
$table = <<< TABLE
    <style>
        table {
        border-collapse: collapse;
        width: 90%;
        min-width: 360px;
        margin: 30px auto;
        text-align:center;
    }
    table,th,td {
        border: 1px solid #000;
        padding: 5px;
    }
    table caption {
        font-size: 18px;
        margin-bottom: 10px;
    }
    table thead {
        background: lightcyan;
    }
    table tbody tr:hover {
        cursor: pointer;
        background: #efefef;
    }
    </style>

    <table>
    <caption>员工信息表</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>性别</th>
                <th>邮箱</th>
            </tr>
        </thead>
        <tbody>
TABLE;
// PDO::FETCH_BOUND: 可以省的, 如果出现问题,再加上试试
while ($stmt->fetch(PDO::FETCH_BOUND)) {
    // 拼装html代码
    $sex = $sex ? '女' : '男';
    $table .= <<< TR
        <tr>
            <td>$id</td>
            <td>$name</td>
            <td>$sex</td>
            <td>$email</td>
        </tr>
    TR;
}

$table .= '</tbody></table>';
echo $table;
