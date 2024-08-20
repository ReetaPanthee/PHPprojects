<?php
function nums($num1){
sort($num1);
echo "Sorted array = ";
foreach($num1 as $num){
  echo $num. " ";
}
  echo "<br>";
$secondlargest = $num1[count($num1) - 2];
echo"".$secondlargest."<br>";
$smallestnum = $num1[0];
echo"".$smallestnum."<br>";
echo"The sum is  ".$secondlargest + $smallestnum."<br>";
}
nums([2,6,5,4,3]);
echo " <br>Lab No.: 2b <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>