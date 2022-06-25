<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$baza = "agencija";
$connection = new mysqli($hostname, $username, $password, $baza) or die("Connect failed: %s\n" . $connection->error);

$sql = "SELECT * FROM putnik where id=" . $_POST['ID'];

$rez= $connection->query($sql);
$putnik = $rez->fetch_object();

echo json_encode($putnik);