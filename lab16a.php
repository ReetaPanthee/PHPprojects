<?php
$servername= 'localhost';
$dbuser = 'root';
$password = '';
$dbname="wt_lab";
$conn = mysqli_connect($servername, $dbuser, $password, $dbname);
if(!$conn){
  die("Connection failed: " .mysqli_connect_error());
}
$sql = "INSERT INTO employee(id, name, branch) VALUES (100, 'Ram', 'HR');";
$sql .= "INSERT INTO employee(id, name, branch) VALUES (101, 'Raj', 'Admin');";
$sql .= "INSERT INTO employee(id, name, branch) VALUES (102, 'Rajesh', 'IT');";
$sql .= "INSERT INTO employee(id, name, branch) VALUES (103, 'Rohan', 'Sales')";
if(mysqli_multi_query($conn, $sql)){
  echo "New records created successfully";
} else{
  echo "Error: ".$result."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>