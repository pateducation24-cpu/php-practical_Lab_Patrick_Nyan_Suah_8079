<?php
// MINUTE() - Extracts the minute from a date or datetime value

$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>MINUTE() Function Examples</h3>";

// Example 1: Get current minute
$sql = "SELECT MINUTE(CURRENT_TIMESTAMP()) as current_minute";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Current Minute: " . $row["current_minute"] . "<br>";

// Example 2: Extract minute from specific time
$sql = "SELECT MINUTE('2024-06-24 15:45:30') as extracted_minute";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Minute from '2024-06-24 15:45:30': " . $row["extracted_minute"] . "<br>";

// Example 3: Multiple time values
echo "<br>Multiple Examples:<br>";
$sql = "SELECT 
    MINUTE('08:15:00') as first_minute,
    MINUTE('14:30:45') as second_minute,
    MINUTE('23:59:59') as third_minute
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Minutes from '08:15:00': " . $row["first_minute"] . "<br>";
echo "Minutes from '14:30:45': " . $row["second_minute"] . "<br>";
echo "Minutes from '23:59:59': " . $row["third_minute"] . "<br>";

// Example 4: Minute range check
echo "<br>Minute Range Examples:<br>";
$sql = "SELECT 
    MINUTE('12:00:00') as on_hour,
    MINUTE('12:30:00') as half_hour,
    MINUTE('12:59:59') as almost_next_hour
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "On the hour (12:00:00): " . $row["on_hour"] . "<br>";
echo "Half hour (12:30:00): " . $row["half_hour"] . "<br>";
echo "Almost next hour (12:59:59): " . $row["almost_next_hour"] . "<br>";

$conn->close();
?>
