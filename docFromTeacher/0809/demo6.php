<?php

namespace _0809;

// 用二维数组来模拟数据表查询结果
$stus = [
    ['id' => 1, 'name' => '刘备', 'course' => 'js', 'score' => 83],
    ['id' => 2, 'name' => '关羽', 'course' => 'php', 'score' => 75],
    ['id' => 3, 'name' => '张飞', 'course' => 'js', 'score' => 52],
    ['id' => 4, 'name' => '孙权', 'course' => 'php', 'score' => 88],
    ['id' => 5, 'name' => '周瑜', 'course' => 'js', 'score' => 65],
    ['id' => 6, 'name' => '孔明', 'course' => 'php', 'score' => 53],
    ['id' => 7, 'name' => '赵云', 'course' => 'js', 'score' => 63],
    ['id' => 8, 'name' => '马超', 'course' => 'js', 'score' => 77],
    ['id' => 9, 'name' => '姜维', 'course' => 'php', 'score' => 93],
    ['id' => 10, 'name' => '黄忠', 'course' => 'js', 'score' => 41],
]
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生信息管理系统</title>
    <style>
        table {
            border-collapse: collapse;
            width: 360px;
            text-align: center;
        }

        table th,
        table td {
            border: 1px solid #000;
            padding: 5px;
        }

        table caption {
            font-size: 1.3em;
        }

        table thead {
            background-color: lightcyan;
        }

        .active {
            color: red;
        }
    </style>
</head>

<body>
    <table>
        <caption>学生成绩表</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>课程</th>
                <th>成绩</th>
            </tr>
        </thead>

        <tbody>

            <?php
            // 遍历数据表的内容,并渲染到页面中

            // { => :
            // } => endforeach, endfor, ...

            foreach ($stus as $stu) : ?>
            <tr>
                <!-- <td><?=$stu['id']?>
                </td>
                <td><?=$stu['name']?>
                </td>
                <td><?=$stu['course']?>
                </td>
                <td><?=$stu['score']?>
                </td> -->

                <?php if ($stu['score'] >= 70) : ?>
                <td><?=$stu['id']?>
                </td>
                <td><?=$stu['name']?>
                </td>
                <td><?=$stu['course']?>
                </td>
                <td><?=$stu['score']?>
                </td>

                <?php endif ?>
            </tr>
            <?php  endforeach ?>


            <?php

/**
 *
 * 流程控制的替代语法/模板语法
 * 1. foreach - endforeach
 * 2. for -> endfor
 * 3. if -> endif
 * 4. switch -> endswitch
 */
?>

        </tbody>
    </table>
</body>

</html>
