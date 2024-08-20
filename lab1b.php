<?php
    // Check if the form is submitted
   $num1=0;
   $num2=0;
   $operator="";
        // Get form data and typecast to float
        $num1 = (float)$_GET["num1"];
        $num2 = (float)$_GET["num2"];
        $operator = $_GET["operator"];

        // Perform calculation based on selected operator
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                // Check if dividing by zero
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error: Division by zero!";
                }
                break;
            default:
                $result = "Invalid operator!";
        }

        // Display the result
        echo "<p>Result:  $result</p>";
        echo " Lab No.: 1b <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
    
    ?>