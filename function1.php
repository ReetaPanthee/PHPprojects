<?php
function student($age){
if($age < 18){
  echo"You are restricted. <br>" ;
}
else
echo"Welcome <br>"; 
}
student(17);
//Default arguments
function defaults($name="Rohit",$id = 100,$faculty="BBA"){
  echo"Name = ".$name." ID= ".$id." Faculty = ".$faculty."<br>";
}
defaults();
defaults("Reeta",111,"BIT");
defaults("Ramba","BIT");
defaults(22);
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

function arrayss($num1){
sort($num1);
echo"Sorted array = ".implode(" ",$num1)."<br>";
$secondlargest = $num1[sizeof($num1) - 2];
echo"".$secondlargest."<br>";
$smallestnum = min($num1);
echo"".$smallestnum."<br>";
echo"The sum is = ".$secondlargest + $smallestnum."<br>";
}
arrayss([2,6,5,4,3]);