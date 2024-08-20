<?php
// Path to the input and output image files
$inputFilePath = './Images/pre_image.jpg';
$outputFilePath = 'post_image.jpg';

// Open the input file for reading in binary mode
$inputFile = fopen($inputFilePath, 'rb');
if (!$inputFile) {
    die("Unable to open input file for reading.");
}

// Open the output file for writing in binary mode
$outputFile = fopen($outputFilePath, 'wb');
if (!$outputFile) {
    fclose($inputFile);
    die("Unable to open output file for writing.");
}

// Copy the content from input file to output file
while (!feof($inputFile)) {
    $buffer = fread($inputFile, 8192); // Read up to 8 KB at a time
    fwrite($outputFile, $buffer);
}

// Close the input and output files
fclose($inputFile);
fclose($outputFile);

echo "Image file copying completed successfully.";
?>
