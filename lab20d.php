<?php
// Enable error logging
ini_set('log_errors', 1);
ini_set('error_log', 'errors.log'); // Set log file path

// Function to demonstrate error logging
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        error_log("Division by zero error: numerator = $numerator, denominator = $denominator");
        return false;
    }
    return $numerator / $denominator;
}

// Trigger and log an error
$result = divide(10, 0);
if ($result === false) {
    echo "An error occurred. Check the error log for details.";
}
?>
