<?php
// Path to the input and output files
$inputFilePath = 'file1.txt';
$outputFilePath = 'file2.txt';

// Read the entire content of the input file
$fileContent = file_get_contents($inputFilePath);

// Check if the file was read successfully
if ($fileContent === false) {
    die("Unable to read input file.");
}

// Write the content to the output file
$result = file_put_contents($outputFilePath, $fileContent);

// Check if the file was written successfully
if ($result === false) {
    die("Unable to write to output file.");
}

echo "File reading and writing completed successfully.";
?>
