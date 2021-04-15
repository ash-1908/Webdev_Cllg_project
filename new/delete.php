<?php
//including the database connection file
require_once("config.php");
 
//get id of the record from url using supergloabl variable $_GET['id']
$id = $_GET['id'];
 
//deleting the row from table
$sql = "DELETE FROM users WHERE Id = '$id'";

if($mysqli -> query($sql) == TRUE){
    echo 'Record Has Been Deleted Successfully...';
    echo "<br><a href='index.php'>View Records</a>";
}
else{
    echo 'Error: '. $sql . "<br>" . $mysqli->error;
}

//redirecting to the home page (index.php in our case)
?>