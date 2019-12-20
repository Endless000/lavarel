<?php

namespace core;


final class Connection
{
    private static $instance;

    private static function createInstance(): \PDO
    {
        $config = require_once '../config/db.php';

        $dsn = 'mysql:dbname=' . $config['database_name'] . ';host=' . $config['host'] . ';port=' . $config['port'];

        return new \PDO($dsn, $config['user'], $config['password']);


    }

    public static function getInstance(): \PDO
    {
        if(!self::$instance) {
        self::$instance = self::createInstance();
        }
        return self::$instance;

    }
}