<?php

include_once 'Connection.php';

class Genre extends Connection
{
    public function displayAllGenre()
    {
        $pdo = $this->connect();
        $query = "SELECT * FROM genre;";
        $results = $pdo->query($query);
        $results->execute();

        $rows = $results->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}