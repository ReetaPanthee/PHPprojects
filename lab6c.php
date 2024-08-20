<?php
// Example array for extracting variables
$taskDetails = [
    'taskName' => 'Learn JS programming',
    'hours' => 2
];

// Extract variables from the array
extract($taskDetails);

// Now $taskName and $hours are available as variables
echo "Task: ". $taskName."<br>";
echo "Hours: $hours<br>";

// Example variables for creating an array
$name = "Rita Panthi";
$rollNo = 22;

// Create an array from variables using compact()
$studentDetails = compact('name', 'rollNo');

// Print the array
print_r($studentDetails);
echo " <br>Lab No.: 6b <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>
