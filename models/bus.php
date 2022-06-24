<?php

class Bus
{
    public $id;
    public $regTablice;
    public $godiste;
    public $kapacitet;


    function vratiSveBuseve()
    {
        require '../dbconnection.php';

        $sql = "SELECT * FROM bus";
        $rs = $connection->query($sql);
        $busevi = array();

        while ($bus = $rs->fetch_object()) {
            array_push($busevi, $bus);
        }

        return $busevi;
    }
}