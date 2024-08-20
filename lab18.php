<?php
//Database connection
$servername= 'localhost';
$dbuser = 'root';
$password = '';
$dbname="wt_lab";
try{
$pdo = new PDO("mysql:host=$servername;dbname=$dbname",$dbuser,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  die("ERROR: Could not connect".$e->getMessage());
}

try{
$read_query = "SELECT * FROM students";
$records = $pdo->query($read_query);
echo"<a href='processform2.html'>Add new Record</a>";
if($records->rowCount() >0){
  echo "<table border='1'><tr><th>ID</th><th> Name</th><th>   Phone</th><th>  Actions </th></tr>";
while($row = $records->fetch()){
  echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["phone"]."</td><td><a href='viewrecord1.php?sid=".$row['id']." '>VIEW</a>,
   <a href='editrecord1.php?sid=".$row['id']." '>EDIT</a>,
   <a href='deleterecord1.php?sid=".$row['id']." '>DELETE</a></td></tr>";
}
echo "</table>";
unset($results);
} else{
  echo "No record found";
}
} catch(PDOException $e){
  die("ERROR: Could not connect".$e->getMessage());
}
unset($pdo);
?>