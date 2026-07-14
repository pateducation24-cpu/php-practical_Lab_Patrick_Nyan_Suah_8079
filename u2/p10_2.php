<?php
$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT CURTIME() AS time_now, CURRENT_TIME() AS current_time";
$result = $conn->query($sql);

echo "<h3>2) CURTIME() / CURRENT_TIME()</h3>";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Current Time: " . $row['time_now'] . "<br>";
    echo "Current Time 2: " . $row['current_time'];
} else {
    echo "No result";
}

$conn->close();
?>
