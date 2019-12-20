<?php


namespace controllers;

use core\Controller;
use models\User;

class AccountController extends Controller
{
    public function loginAction()
    {
        $this->view->render('Login');
    }

    public function registerAction()
    {
        $this->view->render('Registration');
        $login = false;
        $email = false;
        $password = false;
        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (!User::checkPassword($password)) $errors[] = 'Вы не ввели пароль, пароль меньше 6-х символов';
            if (!User::checkName($login)) $errors[] = 'Логин меньше 3-х символов';
            if (!User::checkEmail($email)) $errors[] = 'Не верно указан E-mail';
            else {
                $checkEmail = User::checkUserEmail($email);
                $checkLogin = User::checkUserLogin($login);
                if ($checkLogin == true) $errors[] = 'Пользователь с таким Логином, уже зарегистрирован, введите другой Логин';
                if ($checkEmail == true) $errors[] = 'Пользователь с таким E-mail, уже зарегистрирован, введите другой E-mail';
                else {
                    $hashed_password = User::generateHash($password);
                    if (!User::register($login, $email, $hashed_password)) $errors[] = 'Ошибка Базы Данных';
                }
            }
        }
        return true;
    }
}