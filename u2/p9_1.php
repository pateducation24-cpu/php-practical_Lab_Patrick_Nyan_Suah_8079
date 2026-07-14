<?php
// HOUR() - Extracts the hour from a date or datetime value

$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>HOUR() Function Examples</h3>";

// Example 1: Get current hour
$sql = "SELECT HOUR(CURRENT_TIMESTAMP()) as current_hour";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Current Hour: " . $row["current_hour"] . "<br>";

// Example 2: Extract hour from specific time
$sql = "SELECT HOUR('2024-06-24 15:45:30') as extracted_hour";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Hour from '2024-06-24 15:45:30': " . $row["extracted_hour"] . "<br>";

// Example 3: Multiple time values
echo "<br>Multiple Examples:<br>";
$sql = "SELECT 
    HOUR('08:30:00') as morning_hour,
    HOUR('14:20:15') as afternoon_hour,
    HOUR('23:59:59') as evening_hour
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Morning (08:30:00): " . $row["morning_hour"] . "<br>";
echo "Afternoon (14:20:15): " . $row["afternoon_hour"] . "<br>";
echo "Evening (23:59:59): " . $row["evening_hour"] . "<br>";

$conn->close();
?>
