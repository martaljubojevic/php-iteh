<?php

class Vodic
{
    public $id;
    public $imePrezime;
    public $brojTelefona;
    public $email;

    function vratiSveVodice()
    {
        require '../dbconnection.php';

        $sql = "SELECT * FROM vodic";
        $rs = $connection->query($sql);
        $vodici = array();

        while ($vodic = $rs->fetch_object()) {
            array_push($vodici, $vodic);
        }

        return $vodici;
    }
}
