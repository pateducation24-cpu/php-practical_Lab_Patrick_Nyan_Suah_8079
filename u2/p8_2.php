<?php
// WEEKDAY() - Returns the day of the week (0=Monday, 6=Sunday)

$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT '2024-01-15' as date, WEEKDAY('2024-01-15') as weekday";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Date: " . $row["date"] . "<br>";
        echo "Weekday: " . $row["weekday"] . " (0=Monday, 6=Sunday)<br>";
    }
} else {
    echo "No results";
}

// Additional examples
echo "<hr>";
echo "More examples of WEEKDAY():<br>";

$dates = ['2024-01-01', '2024-06-15', '2024-12-25'];
foreach ($dates as $date) {
    $sql = "SELECT '$date' as date, WEEKDAY('$date') as weekday_num";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $weekdays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    echo "Date: " . $row["date"] . " => " . $weekdays[$row["weekday_num"]] . "<br>";
}

$conn->close();
?>
