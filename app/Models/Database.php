<?php

namespace App\Models;

class Database {
    public static function conexao()
    {
        try {
            // CONEXÃO COM BANCO DE DADOS COM PDO
            $hostname = "localhost";
            $dbname = "db_upload";
            $username = "root";
            $senha = "";

            $pdo = new \PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", "$username", "$senha", array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (\PDOException $e) {
            echo $e->getMessage() . "<br>";
            echo $e->getCode() . "<br>";
            echo $e->getFile() . "<br>";
            echo $e->getLine() . "<br>";
            exit;
        }
        return $pdo;
    }
}
