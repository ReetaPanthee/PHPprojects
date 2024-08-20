<!DOCTYPE html>
<html>
<head>
    <title>Password Validation</title>
</head>
<body>
<form method="POST">
    Password: <input type="text" name="password">
    <input type="submit" value="Submit">
</form>

<?php
$errors = []; // Initialize errors array
$password = ''; // Initialize $password to an empty string

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];

    // Check if password is empty
    if (empty($password)) {
        $errors['password_empty_error'] = "Password cannot be empty.";
    } else {
        // Use preg_match to validate password format
        if (!preg_match("/^[a-zA-Z0-9]{6,}$/", $password)) {
            $errors['password_format_error'] = "Password must be at least 6 characters long and contain alphanumeric characters only.";
        }

        // Use preg_match_all to count alphanumeric characters
        preg_match_all("/[a-zA-Z0-9]/", $password, $matches);
        $num_alphanumeric = count($matches[0]);

        // Use preg_replace to clean password and check against original
        $clean_password = preg_replace("/[^a-zA-Z0-9]/", "", $password);

        // Validate password length
        if (strlen($clean_password) < 6) {
            $errors['password_length_error'] = "Password must be at least 6 characters long.";
        }

        // Check if cleaned password matches the original password
        if ($clean_password !== $password) {
            $errors['password_format_error'] = "Password must contain alphanumeric characters only.";
        }
    }

    // Display errors
    if (isset($errors['password_empty_error'])) {
        echo $errors['password_empty_error'] . "<br>";
    }
    if (isset($errors['password_length_error'])) {
        echo $errors['password_length_error'] . "<br>";
    }
    if (isset($errors['password_format_error'])) {
        echo $errors['password_format_error'] . "<br>";
    }
}
echo " <br>Lab No.: 3 <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>
</body>
</html>



