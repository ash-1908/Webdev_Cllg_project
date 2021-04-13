<?php
//including the database connection file
require_once("config.php");
 
//get id of the record from url using supergloabl variable $_GET['id']
$id = $_POST['id'];
 
//deleting the row from table
$sql = "DELETE * FROM users WHERE id = '$id'";
$result = $mysqli->query($sql);
if($result){
    echo "deleted successfully";
}
else{
    echo "Unable to delete";
}
//redirecting to the home page (index.php in our case)
header("LOCATION : index.php");
?>