<?php
$serverName="localhost";
$dBUsername="root";
$dbPassword="";
$dbName="proj";

$conn =mysqli_connect($serverName, $dBUsername, $dbPassword, $dbName);

if(!$conn){
	die("Connection failed:" . mysqli_connect_error());
}
