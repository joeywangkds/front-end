<?php

namespace _0811;

// 与值相关

// array_values(): 将数组的值,组成一个新数组,键名会重置
$arr = [0=>1, 2=>88, 3=>'10js', 10=>'1js',  6=>88];
printf('<pre>%s</pre>', print_r($arr, true));
// printf('<pre>%s</pre>', print_r(array_values($arr), true));

// in_array(): 查询某个元素是否在这个数组中, true/ false
// echo(in_array('php', $arr) ? '找到了' : '没有的');

// array_search()
// $key = array_search('js', $arr);
// echo $key, ', ', $arr[$key];

// array_unique(): 去重
// printf('<pre>%s</pre>', print_r($arr, true));
@print_r(array_unique($arr));

echo count($arr), '<br>';
// array_count_values(),统计某个值的出现频率
printf('<pre>%s</pre>', print_r(array_count_values($arr), true));

echo array_sum($arr) . '<br>';
echo array_product($arr) . '<br>';
