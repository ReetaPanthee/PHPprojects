<?php
// Enable error reporting for demonstration purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Suppress undefined variable notice
echo "Suppressed undefined variable notice:<br>";
echo @$undefined_variable . "<br>";

// Suppress array index undefined notice
echo "Suppressed array index undefined notice:<br>";
$array = array("food" => "rice");
echo @$array["undefined_index"] . "<br>";

// Suppress division by zero warning
echo "Suppressed division by zero warning: <br>";
try {
    $result = 10 / 0;
} catch (DivisionByZeroError $e) {
    echo "Division by zero occurred, but it was caught and handled: " . $e->getMessage() . "\n";
}


// Suppress file open warning
echo "Suppressed file open warning:<br>";
$file = @fopen("non_existent_file.txt", "r");
if ($file === false) {
    echo "Failed to open file, but the error was suppressed.<br>";
}
?>

