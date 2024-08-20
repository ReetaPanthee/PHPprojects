<?php
$student = [
 "Fullname" => "Rita Panthi",
 "Age" => 20,
 "City" => "Kathmandu"
];

foreach ($student as $key => $value) {
 echo "$key: $value <br>";
}
echo "<br>";
$fruits = array("apple", "banana", "orange", "mango");
$fruitsCount=count($fruits);
for($i=0;$i<count($student);$i++){
  
 echo $student['Fullname']. "<br>";
}
echo " <br>Lab No.: 1b <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>