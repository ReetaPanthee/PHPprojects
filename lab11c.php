<?php

// Custom exception classes
class InvalidAgeException extends Exception {
    public function errorMessage() {
        // Error message
        return "Error: Age must be between 18 and 60.";
    }
}

class InvalidNameException extends Exception {
    public function errorMessage() {
        // Error message
        return "Error: Name must contain only alphabets and spaces.";
    }
}

// Function to validate user input
function validateUser($name, $age) {
    // Validate age
    if ($age < 18 || $age > 60) {
        throw new InvalidAgeException();
    }

    // Validate name
    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        throw new InvalidNameException();
    }

    return true;
}

// Example usage of custom exception handling
try {
    // Validating user input
   
    validateUser("Rita Panthi", 25);  // Valid input
    echo "User validation successful.<br>";

     validateUser("Booba", 10);    // Invalid age
    echo "User validation successful.<br>";
    

    validateUser("Jira123", 30);  // Invalid name
    echo "User validation successful.<br>";

    

} catch (InvalidNameException $e) {
    echo $e->errorMessage() . "<br>";
} catch (InvalidAgeException $e) {
    echo $e->errorMessage() . "<br>";
} catch (Exception $e) {
    echo "Caught generic Exception: " . $e->getMessage() . "<br>";
} finally {
    echo "Validation process completed.<br>";
}
echo " <br> Lab No.: 11c <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";

?>
