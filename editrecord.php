<?php
//Get id from URL
$id = $_GET['sid'];
//Database connection
$server_name= 'localhost';
$db_user = 'root';
$pass = '';
$db_name="wt_lab";
$conn = new mysqli($server_name, $db_user, $pass, $db_name);
if($conn->connect_error){
  die("Connection failed: " .$conn->connect_error);
}
$sql = "UPDATE students SET name = 'Ayush', phone='886655' WHERE id=106";
if($conn->query($sql) === TRUE){
  echo "Record updated succesfully"; 
} else {
  echo "Error updating record: ". $conn->error;
}
?>