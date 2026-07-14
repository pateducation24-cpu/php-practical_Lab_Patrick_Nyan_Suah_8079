<?php
$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT CURDATE() AS today, CURRENT_DATE() AS current_date";
$result = $conn->query($sql);

echo "<h3>1) CURDATE() / CURRENT_DATE()</h3>";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Today: " . $row['today'] . "<br>";
    echo "Current Date: " . $row['current_date'];
} else {
    echo "No result";
}

$conn->close();
?>
