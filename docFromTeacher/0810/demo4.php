<?php
namespace _0810;

// 字符串常用函数

// 1.string与array之间转换
// (1) array->string: implode(string $separator, array $array): string
// (2) string->array: join(array|string $separator = "", ?array $array): string

// array -> string
// implode() / 别名函数 join(): 与 js中的str.join()同义
$colors = ['red', 'green', 'blue'];
echo implode(', ', $colors) ;

// string->array
$str = 'mysql:dbname=phpedu;root;root';
// ";"分隔
$arr = explode(';', $str);
printf('<pre>%s</pre>', print_r($arr, true));

echo '<hr>';

// --------------------------------------------------------------

// 2. 查询与替换
// 获取子串: substr(string $string, int $offset, ?int $length): string { }
// 某个字符之后的字符串: strstr(string $haystack, string $needle, bool $before_needle = false): string|false
// 查询是否存在某字符串: strpos(string $haystack, string $needle, int $offset = 0): int|false
// 字符串替换: str_replace(array|string $search, array|string $replace, array|string $subject, &$count): array|string

$str = 'php.cn';


// php
echo substr($str, 0, 3) . '<br>';
// cn, -1最后一个开始
echo substr($str, -2) . '<hr>';

// strstr: 首次出现位置之后的字符
// 在获取文件扩展名很有用
$img = 'banner.png';
// .png
echo strstr($img, '.') . '<br>';
// banner
echo strstr($img, '.', true) . '<hr>';

// 3. strpos: 首次出现的索引 
echo strpos('php.cn', 'p') . '<br>';
// 可指定开始索引
echo strpos('php.cn', 'p', 1) . '<hr>';
// 字符串查询,首选它,最快

// 4. str_replace: 字符串替换
// 例如, 将一个带有路径式命名空间的完整类名, 映射到一个指定的类文件
$class = '\admin\controllers\User';
// 目标是将这个类转为类文件,方便自动加载
$path = str_replace('\\', '/', $class) . '.php';
// 考虑到不同操作系统, 路径分隔符不同,例如windows: "/,\", linux/max: /
// 使用路径分隔符常量来自动适配路径分隔符
echo $path . '<br>';
$path = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
// 考虑到不同操作系统, 路径分隔符不同,例如windows: "/,\", linux/max: /
// 使用路径分隔符常量来自动适配路径分隔符
echo $path . '<br>';
// 批是替换,例如一些禁用词
echo str_replace(['交友', '异性', '带货'], '**', '我用交友软件找了一个会带货的异性女友') . '<hr>';


// 3. 删除指定字符
// trim(string $string, string $characters = " \t\n\r\0\x0B"): string
// 相关: ltrim(), rtrim(),仅删除左边或右边字符
// strip_tags(string $string, string[]|string|null $allowed_tags = null): string
$str = '  php.cn  ';
// 10, 包括了空格
echo strlen($str) . '<br>';
// 去掉首尾空格
$str = trim($str);
echo strlen($str) . '<br>';
// 删除指定字符
$str = '/0809/';
// 处理路径很有用
echo $str, '=>', trim($str, '/') . '<br>';
// 路径分隔符: win: \, macos/linux: / , 由常量适配
echo $str, '=>', trim($str, DIRECTORY_SEPARATOR);
// 删除字符串中的html,php标签, 防止脚本注入
echo strip_tags('<h2>php.cn</h2><?php echo "Hello" ?>') . '<hr>';

// 4. url相关
// parse_str(string $string, &$result): void
// parse_url(string $url, int $component = -1): array|string|int|false|null
// http_build_query(object|array $data): string

// parse_str(): 解析查询字符串到数组中
// 'http://php.edu/0421/demo2.php?a=1&b=2&c=3';
// "?"后面称为"查询字符串",用于GET请求是发送到后端的参数
// 使用系统常量可获取到url中的查询字符串
echo   $_SERVER['QUERY_STRING']  . '<br>';
$queryString = $_SERVER['QUERY_STRING'];
parse_str($queryString, $arr);
printf('<pre>%s</pre>', print_r($arr, true));
// 反函数 : 将数组转为查询字符串
echo http_build_query(['a' => 1, 'b' => 2, 'c' => 3]) . '<br>';

$url = 'http://phpedu.io/0809/demo2.php?a=1&b=2&c=3';
$arr = parse_url($url);
printf('<pre>%s</pre>', print_r($arr, true));
