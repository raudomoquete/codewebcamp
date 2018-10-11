<?php

$host="localhost";
$port=8894;
$socket="";
$user="root";
$password="bandera1";
$dbname="codemastercamp";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

?>
