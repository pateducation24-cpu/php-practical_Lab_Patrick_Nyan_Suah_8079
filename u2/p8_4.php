<?php
// DAYOFYEAR() - Returns the day of the year (1-366)

$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT '2024-01-15' as date, DAYOFYEAR('2024-01-15') as day_of_year";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Date: " . $row["date"] . "<br>";
        echo "Day of Year: " . $row["day_of_year"] . "<br>";
    }
} else {
    echo "No results";
}

// Additional examples
echo "<hr>";
echo "More examples of DAYOFYEAR():<br>";

$dates = ['2024-01-01', '2024-06-15', '2024-12-31'];
foreach ($dates as $date) {
    $sql = "SELECT '$date' as date, DAYOFYEAR('$date') as day_year";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo "Date: " . $row["date"] . " => Day of Year: " . $row["day_year"] . "<br>";
}

$conn->close();
?>
