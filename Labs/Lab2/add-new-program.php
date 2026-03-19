<?php
// Author: Vincent Mala | Date: 3/18/2026

// Connect to database
$conn = new mysqli("localhost", "root", "", "fru10");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$code = $_POST['programCode'];
$name = $_POST['programName'];
$duration = $_POST['duration'];

// Insert into Program table
$sql = "INSERT INTO Program (ProgramCode, ProgramName, Duration) VALUES ('$code', '$name', '$duration')";
if ($conn->query($sql) === TRUE) {
    echo "New program added successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
