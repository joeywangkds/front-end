<?php

namespace core;

use PDO;

// 模型类
// 抽象类, 必须通过子类才可访问
abstract class Model
{
    // 1. 连接对象
    protected $db = null;

    // 2. 实例化时自动连接数据库
    public function __construct($dsn, $username, $password)
    {
        $this->db = new PDO($dsn, $username, $password);
    }

    // 3. 内置常用操作
    // 如select : 获取所有数据列表,默认10条
    public function select($num =10)
    {
        $stmt = $this->db->prepare('SELECT * FROM `staff` LIMIT ?');
        $stmt->bindParam(1, $num, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // 某取单条记录
    public function getOne($id)
    {
        $sql = 'SELECT `id`,`name`,`email` FROM `user` WHERE `id` = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
