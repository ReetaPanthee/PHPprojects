<?php
$servername = 'localhost';
$username='root';
$password= '';
$dbname = 'wt_lab';
$conn =new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  die("Connection failed: ".$conn-> connect_error);
}
$sql= "SELECT students.id, employee.name, students.phone, employee.branch FROM students INNER JOIN employee ON employee.id = students.id";
$result = $conn->query($sql);
if($result->num_rows > 0){
  echo "<table border=1><tr><th>ID</th><th>Name</th><th>Phone</th><th>Branch</th></tr>";
while($row = $result->fetch_assoc()){
   echo "<r><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>"."</td<td>".$row["branch"]."</td></tr>";
}
 echo "</table>";
} else {
 echo "0 results";
}
$conn->close()
?>