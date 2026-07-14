<?php
// DAYNAME() - Returns the name of the day

$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT '2024-01-15' as date, DAYNAME('2024-01-15') as day_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Date: " . $row["date"] . "<br>";
        echo "Day Name: " . $row["day_name"] . "<br>";
    }
} else {
    echo "No results";
}

// Additional examples
echo "<hr>";
echo "More examples of DAYNAME():<br>";

$dates = ['2024-01-01', '2024-06-15', '2024-12-25'];
foreach ($dates as $date) {
    $sql = "SELECT '$date' as date, DAYNAME('$date') as day_name";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo "Date: " . $row["date"] . " => " . $row["day_name"] . "<br>";
}

$conn->close();
?>
