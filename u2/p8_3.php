<?php
// DAYOFMONTH() - Returns the day of the month (1-31)

$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT '2024-01-15' as date, DAYOFMONTH('2024-01-15') as day_of_month";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Date: " . $row["date"] . "<br>";
        echo "Day of Month: " . $row["day_of_month"] . "<br>";
    }
} else {
    echo "No results";
}

// Additional examples
echo "<hr>";
echo "More examples of DAYOFMONTH():<br>";

$dates = ['2024-01-01', '2024-02-14', '2024-12-31'];
foreach ($dates as $date) {
    $sql = "SELECT '$date' as date, DAYOFMONTH('$date') as day";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo "Date: " . $row["date"] . " => Day of Month: " . $row["day"] . "<br>";
}

$conn->close();
?>
