<?php
include_once 'Connection.php';

class PrintedItem extends Connection
{
    public function displayAllItem()
    {
        $pdo = $this->connect();
        $query = "SELECT printed_item.id, title, author, `ean_isbn`,`publisher`,`published_date`, name_genre, name_topic, name_type, `stock`, `price` FROM `printed_item` JOIN `genre` ON genre.id = printed_item.genre_id JOIN `topic` ON topic.id = printed_item.topic_id JOIN `type` ON type.id = printed_item.type_id;";
        $results = $pdo->query($query);
        $results->execute();

        $rows = $results->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}