<?php


namespace controllers;


use core\Controller;
use models\Users;


class AccountController extends Controller
{

    public function registerAction()
    {
        $this->view->render('Registration');
        //require_once '../views/account/register.phtml';
        if (isset($_POST['submit'])) {
            $login = $_POST['login'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $userModel = new Users();
            $isValid = $userModel->validate($login, $email, $password);
            $userModel->save($login, $email, $password);

        }
    }

    public function loginAction()
    {
        $this->view->render('Login');
        //require_once '../views/account/login.phtml';
        if (isset($_POST['submit'])) {
            $login = $_POST['login'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $userModel = new Users();
            $isValid = $userModel->validate2($login, $email , $password);

        }
    }
}


