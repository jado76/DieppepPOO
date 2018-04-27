<?php


namespace Tools;


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

    }

    public function __destruct()
    {
       unset($this->db);
    }
}