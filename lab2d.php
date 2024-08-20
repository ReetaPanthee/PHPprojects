<?php
//Pass by value 
function values1($a){
  $a+=8;
}
$a= 2;
values1($a);
echo"a = ".$a."<br>";
//Pass by reference
function values2(&$a){
$a+=8;
}
$a=2;
values2($a);
echo"a = ".$a."<br>";
echo " <br>Lab No.: 2d <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>