<?php
// Path to the CSV file
$csvFile = 'student.csv';

// Open the CSV file for reading
if (($handle = fopen($csvFile, 'r')) !== FALSE) {
    echo "<h2>Student Record Table</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Phone No.</th></tr>";

    // Read and display each row
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        echo "<tr>";
        foreach ($data as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>";
    }
    fclose($handle);
    echo "</table>";
} else {
    echo "Unable to open the CSV file.";
}
?>
