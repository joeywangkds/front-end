<?php

// 自定义模型类: 用户表user操作

namespace model;

use core\Model;

// 继承模型基类
class UserModel extends Model
{
    public function __construct($dsn, $usename, $password)
    {
        parent::__construct($dsn, $usename, $password);
    }

    // 获取某个数据
    public function get($id)
    {
        // 调用基类的getOne($id)
        return  $this->getOne($id);
    }
}
