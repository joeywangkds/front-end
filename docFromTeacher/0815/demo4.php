<?php

// 命名空间

namespace _0815;

// 全局成员: 函数, 常量, 类/接口,全局有效, 禁止重复声明

function hello()
{
}

const A =1;

class D
{
}



// 将第二个hello 声明到另一个空间中,不会重名了

namespace _0815_1;

function hello()
{
}

const A = 2;


class D
{
}
