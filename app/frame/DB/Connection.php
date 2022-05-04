<?php

namespace Frame\DB;

use PDO;

class Connection
{
    private const DB_USERNAME = 'root';
    private const DB_PASSWORD = 'root';
    private const DB_DRIVER = 'mysql';
    private const DB_NAME = 'frame';

    private static ?Connection $instance = null;
    private static $pdo;

    private function __construct()
    {
        self::$pdo = new PDO(
            self::DB_DRIVER . ':dbname=' . self::DB_NAME,
            self::DB_USERNAME,
            self::DB_PASSWORD
        );
    }

    public static function getInstance(): Connection
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public static function executeQuery()
    {
        var_dump(self::$pdo);

//        self::$instance::$pdo->exec();
    }
}