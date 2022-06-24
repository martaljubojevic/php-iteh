<?php

$hostname = "localhost";
$username = "root";
$password = "";
$baza = "agencija";
$connection = new mysqli($hostname, $username, $password, $baza) or die("Connect failed: %s\n" . $connection->error);