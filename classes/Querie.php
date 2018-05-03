<?php

class Querie
{
    private $dsn = "mysql:dbname=easywedding;host=localhost;charset=utf8";
    private $user = "phpdieppe";
    private  $password = "phpdieppe";
    private  $db;

    public function __construct()
{
    try
    {
        $this->db = new PDO($this->dsn, $this->user, $this->password);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

    catch (PDOExecption $e)
    {
        Log::logwrite($e->getMessage());
    }

}

    public function selectMethod($sql)
    {
        if(strlen($sql) > 0 || !empty($sql))
        {
            $result = $this->db->prepare($sql);
            $result->execute();
            return $result->fetchAll();
        }

        else
        {
            return false;
        }
    }

    public function __destruct()
    {
       unset($this->db);
    }

    public function insertMethod($sql)
    {
        if(strlen($sql) > 0 || !empty($sql)){
            $result = $this->db->prepare($sql);
            $result->execute();


        }
        else{
            return false;
        }
    }
}