<?php

namespace _0823;

use PDO;

class Db{
    private $db = null;
    public function __construct($dsn,$username,$password)
    {
        $this->db = new PDO($dsn,$username,$password);
    }
    
    public function select($sql){
        return $this->db->query($sql)->fetchALL(PDO::FETCH_ASSOC);

    }

}