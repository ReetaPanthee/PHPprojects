<?php
$empty_array1 = array();
$empty_array2 = [];
$movies=array("Incendies","Her","Beautiful Mind");
$films=["The Great Gatsby","Life is beautiful"];
var_dump($movies);
echo "<br>";
print_r($films);
echo"<br> Size of movies array is ".count($movies);
 echo"<ul>";
for($i=0;$i<sizeof($movies);$i++){
echo"<li>".$movies[$i];
}
echo"<ul>";
echo " <br>Lab No.: 1b <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>