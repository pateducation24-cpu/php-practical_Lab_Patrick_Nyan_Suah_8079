<?php
$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT UNIX_TIMESTAMP() AS unix_time";
$result = $conn->query($sql);

echo "<h3>3) UNIX_TIMESTAMP()</h3>";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Unix Timestamp: " . $row['unix_time'];
} else {
    echo "No result";
}

$conn->close();
?>
