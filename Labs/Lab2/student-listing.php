<?php
// Author: Vincent Mala | Date: 3/18/2026

// Connect to database
$conn = new mysqli("localhost", "root", "", "fru10");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve student records
$result = $conn->query("SELECT * FROM Student");

echo "<h2>Student Listing</h2>";
echo "<table border='1'>
<tr>
  <th>StudentNo</th>
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Gender</th>
  <th>ContactNo</th>
  <th>ProgramCode</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
      <td>{$row['StudentNo']}</td>
      <td>{$row['Firstname']}</td>
      <td>{$row['Lastname']}</td>
      <td>{$row['Gender']}</td>
      <td>{$row['ContactNo']}</td>
      <td>{$row['ProgramCode']}</td>
    </tr>";
}

echo "</table>";

$conn->close();
?>
