<?php

class Putovanje
{
    public $id;
    public $datumPol;
    public $datumDol;
    public $polazak;
    public $dolazak;
    public $naziv;
    public $cena;


    function vratiSvaPutovanja()
    {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $baza = "agencija";
        $connection = new mysqli($hostname, $username, $password, $baza) or die("Connect failed: %s\n" . $connection->error);
        
        $sql = "SELECT * FROM putovanje";
        $rs = $connection->query($sql);
        $putovanja = array();

        while ($putovanje = $rs->fetch_object()) {
            array_push($putovanja, $putovanje);
        }

        return $putovanja;
    }
}