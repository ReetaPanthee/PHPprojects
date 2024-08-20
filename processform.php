<?php
//read data from the form
// $id= (int) $_POST['id'];
// $name =  $_POST['name'];
// $phone = (int) $_POST['phone'];
//Database connection
$server_name= 'localhost';
$db_user = 'root';
$pass = '';
$db_name="wt_lab";
$conn = mysqli_connect($server_name, $db_user, $pass, $db_name);
if(!$conn){
  die("Connection failed: " .mysqli_connect_error());
}
//insert query
$insert_query = "INSERT INTO students VALUES ($id, '$name',$phone)";
//insert data
$result = mysqli_query($conn, $insert_query);
if($result){
  echo "New record created successfully";
}
else{
  echo" Error: ". mysqli_error($conn);
}
//read data from table
$read_query = "SELECT * FROM students";
$records = mysqli_query($conn, $read_query);
if(mysqli_num_rows($records) >0){
while($row = mysqli_fetch_assoc($records)){
  echo "ID= ".$row['id']. " NAME= ".$row['name']. " PHONE= ".$row['phone'] ."<br>";
}
}
else{
  echo"No record found";
}
mysqli_close($conn);
?>
