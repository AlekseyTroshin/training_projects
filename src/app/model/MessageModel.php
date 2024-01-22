<?php

namespace app\model;

use core\Db;
use PDO;


class MessageModel
{
    private PDO $pdo;
    private string $tableBD;

    public function __construct()
    {
        $db = Db::getInstance();
        $this->pdo = $db->getPDO();
        $this->tableBD = TABLE;
    }

    public function addMessage(array $message)
    {
        $query = "INSERT INTO $this->tableBD (name, content) VALUES (:name, :content)";
        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(":name", $message["name"]);
        $stmt->bindValue(":content", $message["content"]);

        $stmt->execute();
    }

    public function getMessages(): array
    {
        $query = "SELECT name, content FROM $this->tableBD";
        return $this->pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

}














