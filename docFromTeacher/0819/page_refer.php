<?php

// ! 仿php.cn分页作用参考代码

/**
     * 生成分页码
     *
     * @param integer $page 当前页
     * @param integer $pages 总页数
     * @return array
     */
function createPages(int $page, int $pages): array
{
    // 当前是第8页, 共计20页
    // [1,  ...    6, 7, 8, 9, 10,  ....    20]
    // 当前是第10页, 共计20页
    // [1,  ...    8, 9, 10, 11, 12,  ....    20]

    // 1. 生成与总页数长度相同的递增的整数数组
    $pageArr = range(1, $pages);

    // 2. 只需要当前和前后二页, 其它页码用 false/null 来标记

    $paginate =  array_map(function ($p) use ($page, $pages) {
        return   ($p == 1 || $p == $pages || abs($page-$p) <=2) ? $p : null;
    }, $pageArr);

    // dump($paginate);
    // 去重, 替换
    $before = array_unique(array_slice($paginate, 0, $page));
    $after = array_unique(array_slice($paginate, $page));


    // 用解构进行合并
    return [...$before, ...$after];
}


$results = createPages(10,30);

foreach ($results as $result){
    echo $result.'             ';
}
