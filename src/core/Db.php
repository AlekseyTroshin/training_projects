<?php

namespace core;

use PDO;

class Db
{

    use TSingleton;

    private PDO $pdo;

    private function __construct()
    {
        $db = require_once CONFIG . "/config_db.php";

        try {
            $this->pdo = new PDO($db['dsn'], $db['user'], $db['password']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getPDO(): PDO
    {
        return $this->pdo;
    }

//var_dump($pdo);
//
//$sth = $pdo->prepare("SELECT * FROM a1_01_20_2024");
//$sth->execute();
//
//$result = $sth->fetchAll();
//
//echo "<pre>";
//var_dump($result);
//echo "</pre>";

}