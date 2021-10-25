<?php

namespace Src\Controller;
use Src\Model\usersModel;

class userController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new usersModel();
    }

    public function login($email,$password)
    {
        if($this->userModel->checkLogin($email,$password)){
            $_SESSION['isLogin'] = true;
            header('Location:index.php?page=default');
        }else{
            $_SESSION['isLogin'] = "Tài khoản không đúng";
        }
    }

    public function ShowLogin()
    {
        include_once "src/View/user/login.php";
    }
}