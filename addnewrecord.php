<?php
//read data from the form
$id= (int) $_POST['id'];
$name =  $_POST['name'];
$phone = (int) $_POST['phone'];
//Database connection
$servername= 'localhost';
$dbuser = 'root';
$password = '';
$dbname="wt_lab";
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$dbuser,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO students VALUES ($id, '$name',$phone)";
$conn->exec($sql);
echo " <br>New record created successfully";
} catch(PDOException $e){
echo $sql. "<br>".$e->getMessage();
}
$conn=null;
?>
