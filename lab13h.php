<?php
// Path to the JSON file
$jsonFile = 'data.json';

// Data to be written to the JSON file
$data = [
    [
        'id' => 1,
        'name' => 'Arya',
        'email' => 'aryastark@gmail.com'
    ],
    [
        'id' => 2,
        'name' => 'Bran',
        'email' => 'branstark@gamil.com'
    ],
    [
        'id' => 3,
        'name' => 'Jon',
        'email' => 'jonsnow@gmail.com'
    ]
];

// Convert PHP array to JSON format
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Write JSON data to the file
if (file_put_contents($jsonFile, $jsonData)) {
    echo "Data successfully written to JSON file.<br>";
} else {
    echo "Failed to write data to JSON file.<br>";
}


// Path to the JSON file
$jsonFile = 'data.json';

// Read the JSON file
$jsonData = file_get_contents($jsonFile);

if ($jsonData === false) {
    die("Failed to read JSON file.<br>");
}

// Decode JSON data to PHP array
$data = json_decode($jsonData, true);

if ($data === null) {
    die("Failed to decode JSON data.<br>");
}

// Display the data
echo "<h2>Student Records</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

foreach ($data as $record) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($record['id']) . "</td>";
    echo "<td>" . htmlspecialchars($record['name']) . "</td>";
    echo "<td>" . htmlspecialchars($record['email']) . "</td>";
    echo "</tr>";
}

echo "</table>";


?>
