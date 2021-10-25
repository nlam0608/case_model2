<?php
namespace Src\Model;

use PDO;
use PDOException;

class DBConnect
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=manager_foods;charset=utf8";
        $this->username = "root";
        $this->password = "Lam12345678@";
    }

    public function connect()
    {
        try{
            return new PDO($this->dsn, $this->username, $this->password);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

}