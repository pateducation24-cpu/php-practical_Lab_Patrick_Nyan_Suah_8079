<?php
// DAYOFWEEK() - Returns the day of the week (1=Sunday, 7=Saturday)

$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT '2024-01-15' as date, DAYOFWEEK('2024-01-15') as day_of_week";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Date: " . $row["date"] . "<br>";
        echo "Day of Week: " . $row["day_of_week"] . " (1=Sunday, 7=Saturday)<br>";
    }
} else {
    echo "No results";
}

// Additional examples
echo "<hr>";
echo "More examples of DAYOFWEEK():<br>";

$dates = ['2024-01-01', '2024-06-15', '2024-12-25'];
foreach ($dates as $date) {
    $sql = "SELECT '$date' as date, DAYOFWEEK('$date') as day_num";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo "Date: " . $row["date"] . " => Day: " . $row["day_num"] . "<br>";
}

$conn->close();
?>
