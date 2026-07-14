<?php /*
// SYSDATE() - Returns the current system date and time
// CURRENT_TIMESTAMP() - Returns the current date and time


$conn = new mysqli("localhost", "root", "", "test_db");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT NOW() as sysdate, NOW() as current_timestamp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "NOW(): " . $row["sysdate"] . "<br>";
        echo "CURRENT_TIMESTAMP(): " . $row["current_timestamp"] . "<br>";
    }
} else {
    echo "No results";
}

// Additional examples
echo "<hr>";
echo "More examples of SYSDATE() and CURRENT_TIMESTAMP():<br>";

$sql = "SELECT 
    NOW() as system_date,
    NOW() as current_ts,
    NOW() as now_func
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "NOW(): " . $row["system_date"] . "<br>";
echo "NOW(): " . $row["current_ts"] . "<br>";
echo "NOW(): " . $row["now_func"] . "<br>";

// Timestamp arithmetic
echo "<hr>";
echo "Timestamp operations:<br>";

$sql = "SELECT 
    NOW() as current_time,
    DATE_ADD(NOW(), INTERVAL 1 DAY) as tomorrow,
    DATE_SUB(NOW(), INTERVAL 7 DAY) as last_week
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "Current Time: " . $row["current_time"] . "<br>";
echo "Tomorrow: " . $row["tomorrow"] . "<br>";
echo "Last Week: " . $row["last_week"] . "<br>";

$conn->close();
*/



echo "Today is:".date("Y/m/d");
echo"<br>";
echo "Today is".date("Y.m.d)")."<br>";
echo "Today is: ".date("Y-m-d");
echo "Today is: ".date("l");
echo "<br>";

date_default_timezone_set("Asia/India");
echo "The time is: ".date("h:i:sa");
?>
