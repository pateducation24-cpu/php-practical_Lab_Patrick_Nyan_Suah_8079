<?php
// WEEK() - Returns the week number (0-53)
// NOW() - Returns the current date and time

$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT '2024-06-15' as date, WEEK('2024-06-15') as week_num, NOW() as current_datetime";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Date: " . $row["date"] . "<br>";
        echo "Week Number: " . $row["week_num"] . "<br>";
        echo "Current Date and Time (NOW()): " . $row["current_datetime"] . "<br>";
    }
} else {
    echo "No results";
}

echo "<hr>";
echo "Current date and time using NOW():<br>";
$sql = "SELECT NOW() as now_time";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "NOW: " . $row["now_time"] . "<br>";

$conn->close();
?>
