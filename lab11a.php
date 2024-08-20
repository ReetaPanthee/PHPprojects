<?php

// Define a function that throws an exception
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception('Division by zero.');
    }
    return $numerator / $denominator;
}

// Example of using try, catch, throw, and finally
$numerator = 10;
$denominator = 0;

try {
    $result = divide($numerator, $denominator);
    echo "Result of division: $result";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br>";
} finally {
    echo "Finally block executed.";
}
echo " <br> Lab No.: 11a <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";

?>
