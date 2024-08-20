<?php
//Get id from URL
$id = $_GET['sid'];
//Database connection
$servername= 'localhost';
$dbuser = 'root';
$password = '';
$dbname="wt_lab";
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbuser,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE students SET name = 'Rahul', phone='564533' WHERE id=300 ";
$stmt = $conn->prepare($sql);
$stmt->execute();
echo $stmt->rowCount()." records updated successfully";
} catch(PDOException $e){
  die("ERROR: Could not connect".$e->getMessage());
}
$conn=null;
?>