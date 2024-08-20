<?php
//Database connection
$server_name= 'localhost';
$db_user = 'root';
$pass = '';
$db_name="wt_lab";
$conn = new mysqli($server_name, $db_user, $pass, $db_name);
if($conn->connect_error){
  die("Connection failed: " .$conn->connect_error);
}
//data retrieve

$read_query = "SELECT * FROM students";
$records = $conn->query($read_query);
echo"<a href='processform.html'>Add new Record</a>";
if($records->num_rows >0){
  echo "<table border='1'><tr><th>ID</th><th> Name</th><th>   Phone</th><th>  Actions </th></tr>";
while($row = $records->fetch_assoc()){
  echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["phone"]."</td><td><a href='singlerecord.php?sid=".$row['id']." '>VIEW</a> <a href=''>EDIT</a>,<a href=''>DELETE</a></td></tr>";
}
echo "</table>";
} else{
  echo "No record found";
}
?>