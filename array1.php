<?php
$movies=array("Incendies","Her","Beautiful Mind");
$films=["The Great Gatsby","Life is beautiful"];
$songs = $movies;
$fruits = range(1,12);
echo $films[0]."<br>";
var_dump($movies);
print_r($fruits);
unset($films);
echo"<br> Size of movies array is ".count($movies);
echo"<ul>";
for($i=0;$i<sizeof($movies);$i++){
echo"<li>".$movies[$i];
echo"<ul>";
}
?>