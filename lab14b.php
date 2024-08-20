<?php
// Configuration
$allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
$maxFileSize = 2 * 1024 * 1024; // 2 MB
$uploadDir = 'uploads/';
$uploadFile = $uploadDir . basename($_FILES['file']['name']);

// Create uploads directory if it does not exist
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if file was uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // Validate file type
        $fileType = $_FILES['file']['type'];
        if (!in_array($fileType, $allowedTypes)) {
            die('Error: Invalid file type. Only JPG, PNG, and PDF files are allowed.');
        }

        // Validate file size
        $fileSize = $_FILES['file']['size'];
        if ($fileSize > $maxFileSize) {
            die('Error: File size exceeds the maximum limit of 2 MB.');
        }

        // Move uploaded file to the specified directory
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            echo 'File successfully uploaded!';
        } else {
            echo 'Error: Unable to move the uploaded file.';
        }
    } else {
        echo 'Error: No file was uploaded or there was an upload error.';
    }
} else {
    echo 'Error: Invalid request method.';
}
?>
