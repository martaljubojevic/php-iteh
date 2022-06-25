<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$baza = "agencija";
$connection = new mysqli($hostname, $username, $password, $baza) or die("Connect failed: %s\n" . $connection->error);

$imePrezime = $_POST['IMEPREZIME'];
$brojTelefona = $_POST['BROJTELEFONA'];
$brojRezervacije = $_POST['BROJREZERVACIJE'];
$putovanje_id = $_POST['PUTOVANJE_ID'];
$bus_id = $_POST['BUS_ID'];
$vodic_id = $_POST['VODIC_ID'];
$id = $_POST['ID'];

$sql = "UPDATE putnik set imeprezime='$imePrezime', brojtelefona='$brojTelefona', brojrezervacije='$brojRezervacije', putovanje_id='$putovanje_id', bus_id='$bus_id', vodic_id='$vodic_id' where id=$id";

$connection->query($sql);