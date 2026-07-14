<?php
$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT FROM_UNIXTIME(1710000000) AS readable_time";
$result = $conn->query($sql);

echo "<h3>4) FROM_UNIXTIME()</h3>";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Readable Date and Time: " . $row['readable_time'];
} else {
    echo "No result";
}

$conn->close();
?>
