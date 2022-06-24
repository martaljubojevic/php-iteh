<?php

class Bus
{
    public $id;
    public $regTablice;
    public $godiste;
    public $kapacitet;


    function vratiSveBuseve()
    {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $baza = "agencija";
        $connection = new mysqli($hostname, $username, $password, $baza) or die("Connect failed: %s\n" . $connection->error);

        $sql = "SELECT * FROM bus";
        $rs = $connection->query($sql);
        $busevi = array();

        while ($bus = $rs->fetch_object()) {
            array_push($busevi, $bus);
        }

        return $busevi;
    }
}