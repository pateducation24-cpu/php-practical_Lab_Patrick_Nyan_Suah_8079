<?php
// MONTH() - Returns the month number (1-12)
// MONTHNAME() - Returns the name of the month

$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT '2024-06-15' as date, MONTH('2024-06-15') as month_num, MONTHNAME('2024-06-15') as month_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Date: " . $row["date"] . "<br>";
        echo "Month Number: " . $row["month_num"] . "<br>";
        echo "Month Name: " . $row["month_name"] . "<br>";
    }
} else {
    echo "No results";
}

// Additional examples
echo "<hr>";
echo "More examples of MONTH() and MONTHNAME():<br>";

$dates = ['2024-01-15', '2024-06-30', '2024-12-25'];
foreach ($dates as $date) {
    $sql = "SELECT '$date' as date, MONTH('$date') as month_num, MONTHNAME('$date') as month_name";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo "Date: " . $row["date"] . " => Month: " . $row["month_num"] . " (" . $row["month_name"] . ")<br>";
}

$conn->close();
?>
