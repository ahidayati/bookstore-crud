<?php

class Connection
{
    public function connect()
    {
//        $pdo = new PDO('mysql:host=localhost;dbname=heroku_ff6761a9baa3a2a', 'root', '');
//        return $pdo;

        $pdo = new PDO('mysql:host=eu-cdbr-west-02.cleardb.net;dbname=heroku_ff6761a9baa3a2a', 'be1f5d7df249be', '0e1e3486');
        return $pdo;

//        //Get Heroku ClearDB connection information
//        $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//        $cleardb_server = $cleardb_url["host"];
//        $cleardb_username = $cleardb_url["user"];
//        $cleardb_password = $cleardb_url["pass"];
//        $cleardb_db = substr($cleardb_url["path"],1);
//        $active_group = 'default';
//        $query_builder = TRUE;
//        // Connect to DB
//        $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
    }
}