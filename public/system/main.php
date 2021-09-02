<?php

include("database/systemdb.php");

class core
{
    /**
     * bootstrap system
     * @return void
     */
    public function init()
    {
        $database = new systemdb;

        $newgirl = [
            "vorname" => "anna",
            "nachname" => "bullock",
            "groesse" => 170
        ];

        $database->addSingleEntry($newgirl);

        var_dump($database);
    }
}