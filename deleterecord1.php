<?php
$id = $_GET['sid'];
//Database connection
$servername= 'localhost';
$dbuser = 'root';
$password = '';
$dbname="wt_lab";
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$dbuser,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql = "DELETE FROM students where id=301 ";
$conn->exec($sql);
echo "Record deleted successfully";
} catch(PDOException $e){
echo $sql. "<br>".$e->getMessage();
}
$conn=null;
?>