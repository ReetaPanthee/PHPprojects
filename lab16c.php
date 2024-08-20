<?php
$servername = 'localhost';
$username='root';
$password='';
$dbname = 'wt_lab';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
$sql = "UPDATE Employee SET branch='IT' WHERE id = 100";
if(mysqli_query($conn, $sql)){
  echo "Record updated successfully";
} else{
  echo "Erro updating record: ".$result."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>