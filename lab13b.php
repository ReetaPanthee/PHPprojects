<?php
// Define data to be written to the JSON file
$data = [
['id' => 1, 'name' => 'orange', 'price' => 200],
['id' => 2, 'name' => 'banana', 'price' => 150],
['id' => 3, 'name' => 'apple', 'price' => 300]
];
// Convert PHP data to JSON string
$jsonData = json_encode($data, JSON_PRETTY_PRINT);
// Define file path
$filePath = 'fruits.json';
// Open file for writing
$file = fopen($filePath, 'w');
if ($file === false) {
echo "Failed to open file '$filePath' for writing.<br>";
exit;
}
// Write JSON string to file
if (fwrite($file, $jsonData) === false) {
echo "Failed to write data to '$filePath'<br>";
fclose($file);
exit;
}


// Close the file handle
fclose($file);
echo "Data successfully written to '$filePath'.<br>";

//Reading file
$filePath = 'fruits.json';
// Open file for reading
$file = fopen($filePath, 'r');
if ($file === false) {
echo "Failed to open file '$filePath' for reading.<br>";
exit;
}
// Read the file content
$jsonData = fread($file, filesize($filePath));
if ($jsonData === false) {
echo "Failed to read data from '$filePath'.<br>";
fclose($file);
exit;
}
// Close the file handle
fclose($file);
// Decode JSON data to PHP array
$data = json_decode($jsonData, true); // true to get an associative array
// Display the data
echo "Data read from '$filePath':<br>";
print_r($data);
?>
