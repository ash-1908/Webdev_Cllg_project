<?php
$databaseHost = 'localhost';
$databaseName = 'TestDatabase';
$databaseUserName = 'root';
$databasePassword = '';

//OOP style programming to connect to database
$mysqli = new mysqli(_________1________); 
if($mysqli->connect_error){
	die('Connection Failed - ' . $mysqli->connect_error);
}
//Above connection can be made in procedural way as well.
?>