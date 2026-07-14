<?php
// SECOND() - Extracts the second from a date or datetime value

$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>SECOND() Function Examples</h3>";

// Example 1: Get current second
$sql = "SELECT SECOND(CURRENT_TIMESTAMP()) as current_second";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Current Second: " . $row["current_second"] . "<br>";

// Example 2: Extract second from specific time
$sql = "SELECT SECOND('2024-06-24 15:45:30') as extracted_second";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Second from '2024-06-24 15:45:30': " . $row["extracted_second"] . "<br>";

// Example 3: Multiple time values
echo "<br>Multiple Examples:<br>";
$sql = "SELECT 
    SECOND('08:15:05') as first_second,
    SECOND('14:30:30') as second_second,
    SECOND('23:59:59') as third_second
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Seconds from '08:15:05': " . $row["first_second"] . "<br>";
echo "Seconds from '14:30:30': " . $row["second_second"] . "<br>";
echo "Seconds from '23:59:59': " . $row["third_second"] . "<br>";

// Example 4: Second value variations
echo "<br>Second Range Examples:<br>";
$sql = "SELECT 
    SECOND('12:00:00') as start_second,
    SECOND('12:30:15') as mid_range,
    SECOND('12:59:59') as max_second
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Start of minute (12:00:00): " . $row["start_second"] . " seconds<br>";
echo "Mid-range (12:30:15): " . $row["mid_range"] . " seconds<br>";
echo "Maximum seconds (12:59:59): " . $row["max_second"] . " seconds<br>";

$conn->close();
?>
