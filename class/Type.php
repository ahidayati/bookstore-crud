<?php

include_once 'Connection.php';

class Type extends Connection
{
    public function displayAllType()
    {
        $pdo = $this->connect();
        $query = "SELECT * FROM `type`;";
        $results = $pdo->query($query);
        $results->execute();

        $rows = $results->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}