<?php
$servername = 'localhost';
$username='root';
$password= '';
$dbname = 'wt_lab';
$conn =new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  die("Connection failed: ".$conn-> connect_error);
}
$sql= "SELECT id, name, phone FROM students WHERE id IN(SELECT id FROM employee WHERE branch='IT')";
$result = $conn->query($sql);
if($result->num_rows > 0){
  echo "<table border=1><tr><th>ID</th><th>Name</th><th>Phone</th></tr>";
while($row = $result->fetch_assoc()){
   echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["phone"]."</td></tr>";
}
 echo "</table>";
} else {
 echo "0 results";
}
$conn->close()
?>