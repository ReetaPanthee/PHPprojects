<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Undefined variable error:<br>";
// Undefined variable
echo $undefined_variable;

echo " <br>Function call with missing argument error: <br>";
// Function call with missing argument
function add($a, $b) {
    return $a + $b;
}
try {
    echo add(5);
} catch (ArgumentCountError $e) {
    echo "Caught exception: " . $e->getMessage();
}

echo " <br>Array access with undefined index error: <br>";
// Array access with undefined index
$array = array("food" => "rice");
echo $array["undefined_index"];
?>
