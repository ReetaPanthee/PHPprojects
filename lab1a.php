<form method="POST">
Enter a number:
<input type="text" name="number1"><br>
Enter a number: 
<input type="text" name="number2"><br>
<input type="submit" value="Get Multiplication Table">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $num1 = $_POST["number1"];
  $num2 = $_POST["number2"];
  if(is_numeric($num1) && is_numeric($num2)){
  echo "Multiplication Table :"."<br>";
for($i=1;$i<=10;$i++){
  if($num1 > $num2){
  echo $num1." * ". $i. " = ". $num1 * $i."<br>";
  }
  else{
    echo $num2." *". $i ." = ".$num2 * $i."<br>";
  }
}
  } else{
    echo "Enter valid numbers";
  }
}
echo " Lab No.: 1a <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>