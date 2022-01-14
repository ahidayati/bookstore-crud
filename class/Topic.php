<?php

include_once 'Connection.php';

class Topic extends Connection
{
    public function displayAllTopic()
    {
        $pdo = $this->connect();
        $query = "SELECT * FROM topic;";
        $results = $pdo->query($query);
        $results->execute();

        $rows = $results->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}