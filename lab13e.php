<?php
// Path to the input and output text files
$inputFilePath = './Files/text1.txt';
$outputFilePath = './Files/text2.txt';

// Read the entire content of the input file
$fileContent = file_get_contents($inputFilePath);

// Check if the file was read successfully
if ($fileContent === false) {
    die("Unable to read input file.");
}

// Replace words starting with "T" or "t" with "HEHE"
$pattern = '/\b[Tt]\w*/';
$replacement = 'HEHE';
$modifiedContent = preg_replace($pattern, $replacement, $fileContent);

// Write the modified content to the output file
$result = file_put_contents($outputFilePath, $modifiedContent);

// Check if the file was written successfully
if ($result === false) {
    die("Unable to write to output file.");
}

echo "File processing completed successfully.";
?>
