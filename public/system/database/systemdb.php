<?php

class systemdb
{
    protected $connection = null;

    public function __construct()
    {
        $this->connection = $this->dbconnect();
    }

    public function dbconnect()
    {
        $servername = "mysql.dev.localhost";
        $username = "root";
        $password = "athene";
        $database = "nutten";

// Create connection
        $conn = new mysqli($servername, $username, $password, $database);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    /**
     * @param array $data
     */
    public function addSingleEntry($data)
    {
        //$this->connection->query("INSERT INTO nutten('vorname','nachname','groesse') VALUES ('".$data['vorname'].",".$data['nachname'].",".$data['groesse']."')");
        $this->connection->query("INSERT INTO nutten(vorname,nachname,groesse) VALUES ('".$data['vorname']."','".$data['nachname']."','".$data['groesse']."')");
    }
}