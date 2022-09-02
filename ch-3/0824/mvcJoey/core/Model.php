<?php

namespace joey;

use PDO;

class Model
{
    protected $db;

    public function __construct($dsn,$username,$password)
    {
        $this->db = new PDO($dsn,$username,$password);
    }

    public function getAll($num=10)
    {
       $stmt = $this->db->prepare('SELECT * FROM `staff` LIMIT ?');
       $stmt->bindParam(1,$num,PDO::PARAM_INT);
       $stmt->execute();
    //    print_r($stmt->debugDumpParams());
       return $stmt->fetchALL();

    }
}

// print_r((new Model('mysql:dbname=phpedu','root','root'))->getAll());