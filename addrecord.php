<?php
//read data from the form
$id= (int) $_POST['id'];
$name =  $_POST['name'];
$phone = (int) $_POST['phone'];
//Database connection
$server_name= 'localhost';
$db_user = 'root';
$pass = '';
$db_name="wt_lab";
$conn = new mysqli($server_name, $db_user, $pass, $db_name);
if($conn->connect_error){
  die("Connection failed: " .$conn->connect_error);
}
//insert query
$insert_query = "INSERT INTO students VALUES ($id, '$name',$phone)";
//insert data
$result = $conn->query($insert_query);
if($result){
  echo " <br>New record created successfully";
}
else{
  echo" Error: ". $conn->connect_error;
}
// read data from table
$read_query = "SELECT * FROM students";
$records = $conn->query( $read_query);
if($records->num_rows >0){
while($row = $records->fetch_assoc()){
  echo " <br>ID= ".$row['id']. " NAME= ".$row['name']. " PHONE= ".$row['phone'] ."<br>";
}
}
else{
  echo"No record found";
}
mysqli_close($conn);
?>
