<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>员工列表</title>
</head>

<body>
    <h3>员工列表</h3>
    <ul>
        <?php foreach ($staffs as $staff) : extract($staff) ?>
        <li><?=$id?> : <?=$name?>, <?=$sex ? '女' : '男'?> (
            <?=$email?> )
        </li>
        <?php endforeach ?>
    </ul>
</body>

</html>
