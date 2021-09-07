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
        $this->connection->query("INSERT INTO nutten(vorname,nachname,groesse) VALUES ('" . $data['vorname'] . "','" . $data['nachname'] . "','" . $data['groesse'] . "')");
    }

    public function getAllEntries()
    {
        $sql = "SELECT id, vorname, nachname FROM nutten";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . " - Name: " . $row["vorname"] . " " . $row["nachname"] . "<br>";
            }
        } else {
            echo "0 results";
        }
    }

    public function getOneEntry()
    {
        $sql = "SELECT id, vorname, nachname FROM nutten where id = 1";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . " - Name: " . $row["vorname"] . " " . $row["nachname"] . "<br>";
            }
        }
    }

    public function addDataEntry()
    {
        $sql = "INSERT INTO nutten (vorname, nachname, groesse)
                VALUES ('Timo', 'Wo', '210')";
        $this->connection->query($sql);
    }
}