<?php
$filePath = './Files/text1.txt';

// Open the file for reading and writing
$file = fopen($filePath, 'r+');
if (!$file) {
    die("Unable to open file.");
}

// Write initial content
fwrite($file, "Hello, World! This is a test.");

// Move the pointer and read content
fseek($file, 8); // Move to the 9th byte
echo "Content from position 8: " . fread($file, 5) . "<br>"; // Read 5 bytes

// Move to the end and write additional content
fseek($file, 0, SEEK_END);
fwrite($file, "<br> Appended text.");

// Move to the beginning and read the updated content
fseek($file, 0);
echo "Updated File Content:<br>" . fread($file, filesize($filePath)) . "<br>";

// Close the file
fclose($file);
?>
