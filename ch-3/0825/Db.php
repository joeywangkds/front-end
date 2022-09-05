<?php

namespace joey;

use PDO;

class Db
{
    protected $db;
    protected $table;
    protected $field;
    protected $limit;
    protected $opt = [];


    public function __construct($dsn, $username, $password)
    {
        $this->db = new PDO($dsn, $username, $password);
    }

    public function table($table)
    {
        $this->table = $table;
        return $this;
    }

    public function field($field)
    {
        $this->field = $field;
        return $this;
    }

    public function limit($limit = 10)
    {
        $this->limit = $limit;
        $this->opt['limit'] = " LIMIT $limit";
        return $this;
    }

    public function page($page = 1)
    {
        $this->opt['offset'] = ' OFFSET' . ($page - 1) * $this->limit;
        return $this;
    }

    public function where($where = '')
    {
        $this->opt['where'] = " WHERE $where";
        return $this;
    }

    public function select()
    {
        global $sql;
        $sql = 'SELECT ' . $this->field . ' FROM ' .$this->table;
        $sql .= $this->opt['where'] ?? null;
        $sql .= $this->opt['limit'] ?? null;
        $sql .= $this->opt['offset'] ?? null;

        echo $sql;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
        $this->opt['where'] = null;
    }

    public function insert($data)
    {
        $str='';

        foreach($data as $key=>$value){
            $str .= $key. ' = '. "'".$value."'" .', ';
        }
        
        $sql = 'INSERT ' . $this->table . ' SET ' .rtrim($str, ', ');
        
        $stmt = $this->db->prepare($sql);

        if($stmt->execute()){
            echo "success, and the new id is #".$this->db->lastInsertId();
        }else{
            echo "not success";
        }
        $this->opt['where'] = null;
    }

    public function update($data)
    {
        $str='';

        foreach($data as $key=>$value){
            $str .= $key. ' = '. "'".$value."'" .', ';
        }
        
        $sql = 'UPDATE ' . $this->table . ' SET ' .rtrim($str, ', ');
        $sql .= $this->opt['where'] ?? die('fobbidon no where update!');

        // echo $sql;
        
        $stmt = $this->db->prepare($sql);

        

        if($stmt->execute()){
            echo "success, and the new id is #".$this->db->lastInsertId();
        }else{
            echo "not success";
        }
        $this->opt['where'] = null;
    }

    public function delete()
    {
      
        $sql = 'DELETE FROM '. $this->table;
        $sql .= $this->opt['where'] ?? die('fobbidon no where update!');

        echo $sql.'<br>';
        
        $stmt = $this->db->prepare($sql);

        

        if($stmt->execute()){
            echo "success, and the record has been removed";
        }else{
            echo "not success";
        }

        $this->opt['where'] = null;
    }
    
}

$db = new Db('mysql:dbname=phpedu', 'root', 'root');

// $result = $db->field('*')->table('staff')->limit(5)->select();

$data = ['name'=>'Jack','gender'=>0,'email'=>'test@test.com'];

$data2 = ['name'=>'Sala'];



$db->table('staff')->where("id = 9")->delete();

// $insert = $db->table('staff')->insert($data);

require 'helper/helper.php';

// p($result);



// $db->where('where', 3, 1);
