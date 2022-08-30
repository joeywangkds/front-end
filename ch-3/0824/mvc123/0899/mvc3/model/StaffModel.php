<?php

// 自定义模型类: 员工表操作

namespace model;

use core\Model;

// 继承模型基类
class StaffModel extends Model
{
    public function __construct($dsn, $usename, $password)
    {
        parent::__construct($dsn, $usename, $password);
    }

    // 获取所有数据
    public function getAll($num)
    {
        // 调用基类的select()
        return  $this->select($num);
    }
}
