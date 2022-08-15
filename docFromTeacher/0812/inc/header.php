<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文件包含演示:模块化一个页面架构</title>
</head>

<body>
    <!-- 大多数页面,页眉和页脚是一样的, 变化只是主体部分,所以可以将页眉页脚剥离成公共模块,重复使用 -->
    <!-- 页眉 -->
    <header>
        <nav>
            <a href="">首页</a>
            <a href="">教学视频</a>
            <a href="">学习路径</a>
            <a href="">技术文章</a>
        </nav>
    </header>
