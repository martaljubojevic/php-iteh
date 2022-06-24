<?php

class Vodic
{
    public $id;
    public $imePrezime;
    public $brojTelefona;
    public $email;

    function vratiSveVodice()
    {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $baza = "agencija";
        $connection = new mysqli($hostname, $username, $password, $baza) or die("Connect failed: %s\n" . $connection->error);

        $sql = "SELECT * FROM vodic";
        $rs = $connection->query($sql);
        $vodici = array();

        while ($vodic = $rs->fetch_object()) {
            array_push($vodici, $vodic);
        }

        return $vodici;
    }
}
