<?php

namespace Src\Model;

class usersModel
{
    private $dbConnect;

    public function __construct()
    {
        $conn = new DBConnect();
        $this->dbConnect = $conn->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function checkLogin($email, $password)
    {
        $sql = "SELECT * FROM users WHERE  email = :email AND password = :password" ;
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":password",$password);
        $stmt->execute();
        return $stmt->rowCount()>0;
    }

    function logout() {
        $_SESSION['isLogin'] = false;
        header('location: login.php');
    }
}