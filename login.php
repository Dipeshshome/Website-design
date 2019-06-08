<?php

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='registration';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

if($conn->connect_error)
{
	die("Connection Failed ".$conn->connect_error);
}

?>