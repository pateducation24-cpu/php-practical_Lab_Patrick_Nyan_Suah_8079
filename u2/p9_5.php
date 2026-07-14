<?php
// DATE_SUB() - Subtracts a specified interval from a date

$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>DATE_SUB() Function Examples</h3>";

// Example 1: Subtract days from current date
echo "Subtract Days from Current Date:<br>";
$sql = "SELECT 
    CURRENT_DATE() as today,
    DATE_SUB(CURRENT_DATE(), INTERVAL 1 DAY) as yesterday,
    DATE_SUB(CURRENT_DATE(), INTERVAL 7 DAY) as last_week,
    DATE_SUB(CURRENT_DATE(), INTERVAL 30 DAY) as last_month
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Today: " . $row["today"] . "<br>";
echo "Yesterday (1 day ago): " . $row["yesterday"] . "<br>";
echo "Last Week (7 days ago): " . $row["last_week"] . "<br>";
echo "Last Month (30 days ago): " . $row["last_month"] . "<br>";

// Example 2: Subtract months and years
echo "<br>Subtract Months and Years:<br>";
$sql = "SELECT 
    CURRENT_DATE() as today,
    DATE_SUB(CURRENT_DATE(), INTERVAL 1 MONTH) as one_month_ago,
    DATE_SUB(CURRENT_DATE(), INTERVAL 6 MONTH) as six_months_ago,
    DATE_SUB(CURRENT_DATE(), INTERVAL 1 YEAR) as one_year_ago
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Today: " . $row["today"] . "<br>";
echo "1 Month Ago: " . $row["one_month_ago"] . "<br>";
echo "6 Months Ago: " . $row["six_months_ago"] . "<br>";
echo "1 Year Ago: " . $row["one_year_ago"] . "<br>";

// Example 3: Subtract from datetime (with hours)
echo "<br>Subtract Hours from Current DateTime:<br>";
$sql = "SELECT 
    CURRENT_TIMESTAMP() as now,
    DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 1 HOUR) as one_hour_ago,
    DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 6 HOUR) as six_hours_ago,
    DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 24 HOUR) as yesterday_same_time
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Now: " . $row["now"] . "<br>";
echo "1 Hour Ago: " . $row["one_hour_ago"] . "<br>";
echo "6 Hours Ago: " . $row["six_hours_ago"] . "<br>";
echo "Yesterday (Same Time): " . $row["yesterday_same_time"] . "<br>";

// Example 4: Subtract minutes and seconds
echo "<br>Subtract Minutes and Seconds:<br>";
$sql = "SELECT 
    CURRENT_TIMESTAMP() as now,
    DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 30 MINUTE) as thirty_min_ago,
    DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 60 SECOND) as one_min_ago
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Now: " . $row["now"] . "<br>";
echo "30 Minutes Ago: " . $row["thirty_min_ago"] . "<br>";
echo "1 Minute Ago: " . $row["one_min_ago"] . "<br>";

// Example 5: Complex interval (days and hours)
echo "<br>Complex Interval Example:<br>";
$sql = "SELECT 
    CURRENT_TIMESTAMP() as now,
    DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL '10-5' DAY_HOUR) as ten_days_five_hours_ago
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Now: " . $row["now"] . "<br>";
echo "10 Days 5 Hours Ago: " . $row["ten_days_five_hours_ago"] . "<br>";

$conn->close();
?>
