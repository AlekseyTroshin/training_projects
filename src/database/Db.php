<?php

namespace database;

use PDO;

class Db
{

    private PDO $dbn;

    public function __construct()
    {
        $this->dbn = new PDO(DSN_DB, USER_DB, PASSWORD_DB);
    }

    public function query(string $sql, array $params = [], $class = \stdClass::class): array
    {
        $sth = $this->dbn->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

}