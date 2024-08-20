<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form method="POST">
        <label for="number1">Number1:</label>
        <input type="number" id="num2" name="num1" required>
        <br><br>
        <label for="number2">Number2:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
<button type="submit" name="operation" value="Addition">Add</button>
<button type="submit" name="operation" value="Subtraction">Subtract</button>
<button type="submit" name="operation" value="Multiplication">Multiply</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$num1= $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];
 if (is_numeric($num1) && is_numeric($num2)) {
switch ($operation) {
            case 'Addition':
                $result = $num1 + $num2;
                echo "Result: $num1 + $num2 = $result";
                break;
            case 'Subtraction':
                $result = $num1 - $num2;
                echo "Result: $num1 - $num2 = $result";
                break;
            case 'Multiplication':
                $result = $num1 * $num2;
                echo "Result: $num1 * $num2 = $result";
                break;
            default:
                $result = "Invalid operation!";
        }
      } else {
            echo "Please enter valid numbers";
        }
      }
      echo " <br> Lab No.: 8 <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>
