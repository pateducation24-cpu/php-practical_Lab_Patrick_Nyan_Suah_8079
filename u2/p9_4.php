<?php
// DATE_FORMAT() - Formats a date according to a specified format

$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>DATE_FORMAT() Function Examples</h3>";

// Example 1: Current date in different formats
echo "Current Date/Time in Different Formats:<br>";
$sql = "SELECT 
    DATE_FORMAT(CURRENT_TIMESTAMP(), '%Y-%m-%d') as standard_date,
    DATE_FORMAT(CURRENT_TIMESTAMP(), '%d/%m/%Y') as european_date,
    DATE_FORMAT(CURRENT_TIMESTAMP(), '%m/%d/%Y') as american_date
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Standard (YYYY-MM-DD): " . $row["standard_date"] . "<br>";
echo "European (DD/MM/YYYY): " . $row["european_date"] . "<br>";
echo "American (MM/DD/YYYY): " . $row["american_date"] . "<br>";

// Example 2: Date with time formatting
echo "<br>Date with Time Formatting:<br>";
$sql = "SELECT 
    DATE_FORMAT(CURRENT_TIMESTAMP(), '%Y-%m-%d %H:%i:%s') as full_datetime,
    DATE_FORMAT(CURRENT_TIMESTAMP(), '%a, %b %d, %Y') as long_format,
    DATE_FORMAT(CURRENT_TIMESTAMP(), '%W, %M %d, %Y') as full_long_format
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Full DateTime (YYYY-MM-DD HH:MM:SS): " . $row["full_datetime"] . "<br>";
echo "Short Month Format: " . $row["long_format"] . "<br>";
echo "Full Format: " . $row["full_long_format"] . "<br>";

// Example 3: Time-only formatting
echo "<br>Time-Only Formatting:<br>";
$sql = "SELECT 
    DATE_FORMAT(CURRENT_TIMESTAMP(), '%H:%i:%s') as time_24hr,
    DATE_FORMAT(CURRENT_TIMESTAMP(), '%h:%i:%s %p') as time_12hr
";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "24-Hour Format: " . $row["time_24hr"] . "<br>";
echo "12-Hour Format: " . $row["time_12hr"] . "<br>";

// Example 4: Specific date formatting
echo "<br>Specific Date Examples:<br>";
$sql = "SELECT 
    DATE_FORMAT('2024-06-24', '%d %b, %Y') as date_example,
    DATE_FORMAT('2024-06-24', '%Y (Week %v)') as week_format,
    DATE_FORMAT('2024-06-24', '%c/%e/%y') as short_format
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Nice Format: " . $row["date_example"] . "<br>";
echo "Week Number: " . $row["week_format"] . "<br>";
echo "Short Format: " . $row["short_format"] . "<br>";

$conn->close();
?>
