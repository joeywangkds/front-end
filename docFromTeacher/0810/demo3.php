<?php
namespace _0810;
// 二种字符串声明方式

/**
 * 1. 纯文本
 * (1) 定界符: 单引号 / nowdoc
 * (2) 特点: 不解析变量, 不转义特殊符号的转义序列
 * (3) 场景: 静态文本,不含变量和转义符
 */

// 单引号
$domain = 'https://www.php.cn';
// \n\r回车换行, 特殊字符前加"\"转义符后则具有了特殊控制意义
// 单引号字符串不要再使用单引号,否则解析错误, 除非转义 \'
$str = '网站名称: \n\r $domain';
// 单引号文本, 内部变量,转义序列不解析,全部原样显示
echo $str . '<br>';

// nowdoc: 单引号的语法糖,
// 适用于多行,大段,不含变量和转义符的静态纯文本,如html,文章等
$str = <<< 'TXT'
 <header>
    <nav>
        <a href="">首页</a>
        <a href="">视频</a>
        <a href="">文章</a>
    </nav>
 </header>
TXT;
echo $str . '<hr>';

/**
 * 2. 模板字符串
 * (1) 定界符: 双引号 / heredoc
 * (2) 特点: 解析变量, 转义特殊符号
 * (3) 场景: 包含插值变量和特殊字符的就动态模板
 */

// 双引号
$site = "php中文网 \n\r \" $domain \"";
// \n\r,被正常解析,所以没有出现在结果中(页面显示为空格,源码可见)
// 字符串中出现了与定界符字符,如单引号或双引号,必须转义后才能正常显示
// \': 转义单引号, \": 转义双引号, 本段转义的是双引号
echo $site . '<br>';

// 4. heredoc: 双引号模板语法糖:
// 适用于多行,大段,包含变量和转义符的动态内容
// 因为heredoc中出现双引号不需要转义,所以特别适合写html模板
$tpl = <<< "PHPCN"
    <ul style="display: inline-block; border:1px solid">
        <li>PHP中文网</li>
        <li style="color:brown">$domain</li>
    </ul>
PHPCN;
echo $tpl;

/**
 * 备注
 * 1. TXT, PHPCN: 只是标识符,全大写只是行业约定, 可任意命名,只要成对出现即可
 * 2. nowdoc的标识符,单引号必须写,如 'TXT'
 * 3. heredoc: PHPCN双引号是可选的, 例如 PHPCN也可以, 推荐不要写
 * 4. 更多转义序列: https://www.php.net/manual/zh/language.types.string.php#language.types.string.syntax.single
 */
