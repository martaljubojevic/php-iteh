<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$baza = "agencija";
$connection = new mysqli($hostname, $username, $password, $baza) or die("Connect failed: %s\n" . $connection->error);

$sql = "DELETE FROM putnik WHERE id=" . $_POST['ID'];
$connection->query($sql);