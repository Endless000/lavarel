<?php

namespace models;


use core\Connection;

const SALT = '827ccb0eea8a706c4c34a16891f84e7b';


class Users
{

    public function validate(string $login , string $email , string $password): bool
    {
        $isValid = true;

        if(mb_strlen($login) < 4 || mb_strlen($login) > 16) {
            echo 'Логин меньше 3-х символов';
            die;
        }

        if(mb_strlen($password) < 5 || mb_strlen($password) > 14) {
            echo 'Вы не ввели пароль, пароль меньше 6-х символов';
            die;
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Не верно указан E-mail';
            die;
        }

        if(self::checkUserEmail($email) == true) {
            echo 'Пользователь с таким E-mail, уже зарегистрирован, введите другой E-mail';
            die;
        }

        if(self::checkUserLogin($login) == true) {
            echo 'Пользователь с таким Логином, уже зарегистрирован, введите другой Логин';
            die;
        }


        return true;

    }

    public function validate2(string $login , string $email , string $password): bool
    {
        $isValid = true;

        if(self::checkUserEmail($email) == false) {
            echo 'Wrong Email';
            die;
        }

        if(self::checkUserLogin($login) == false) {
            echo 'Wrong Login';
            die;
        }

        if(self::checkUserPassword($password) == false) {
            echo 'Wrong Password';
        }else {
            require_once '../views/account/welcome.phtml';
        }


        return true;

    }


    public static function checkUserEmail($email)
    {
        $pdo = Connection::getInstance();
        $sql = 'SELECT * FROM users WHERE email = :email';
        $result = $pdo->prepare($sql);
        $result->bindParam(':email', $email);
        $result->execute();
        $user = $result->fetch();
        if ($user) return true;
        else return false;
    }

    public static function checkUserLogin($login)
    {
        $pdo = Connection::getInstance();
        $sql = 'SELECT * FROM users WHERE login = :login';
        $result = $pdo->prepare($sql);
        $result->bindParam(':login', $login);
        $result->execute();
        $user = $result->fetch();
        if ($user) return true;
        else return false;
    }

    public static function checkUserPassword($password)
    {
        $pdo = Connection::getInstance();
        $sql = 'SELECT * FROM users WHERE password = :password';
        $result = $pdo->prepare($sql);
        $result->bindParam(':password', $password);
        $result->execute();
        $user = $result->fetch();
        if ($user) return true;
        else return false;
    }

    public static function save(string $login, string $email, string $password)
    {
        $password = md5($password. SALT);
        $pdo = Connection::getInstance();
        $sql = "INSERT INTO users (login , email , password) VALUES (:login , :email , :password)";
        $state = $pdo->prepare($sql);
        $state->bindParam(':login', $login);
        $state->bindParam(':email', $email);
        $state->bindParam(':password', $password);
        return $state->execute();
    }

}