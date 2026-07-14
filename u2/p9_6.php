<?php
// DATE_ADD() - Adds a specified interval to a date

$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>DATE_ADD() Function Examples</h3>";

// Example 1: Add days to current date
echo "Add Days to Current Date:<br>";
$sql = "SELECT 
    CURRENT_DATE() as today,
    DATE_ADD(CURRENT_DATE(), INTERVAL 1 DAY) as tomorrow,
    DATE_ADD(CURRENT_DATE(), INTERVAL 7 DAY) as next_week,
    DATE_ADD(CURRENT_DATE(), INTERVAL 30 DAY) as next_month
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Today: " . $row["today"] . "<br>";
echo "Tomorrow (1 day from now): " . $row["tomorrow"] . "<br>";
echo "Next Week (7 days from now): " . $row["next_week"] . "<br>";
echo "Next Month (30 days from now): " . $row["next_month"] . "<br>";

// Example 2: Add months and years
echo "<br>Add Months and Years:<br>";
$sql = "SELECT 
    CURRENT_DATE() as today,
    DATE_ADD(CURRENT_DATE(), INTERVAL 1 MONTH) as one_month_later,
    DATE_ADD(CURRENT_DATE(), INTERVAL 6 MONTH) as six_months_later,
    DATE_ADD(CURRENT_DATE(), INTERVAL 1 YEAR) as one_year_later
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Today: " . $row["today"] . "<br>";
echo "1 Month Later: " . $row["one_month_later"] . "<br>";
echo "6 Months Later: " . $row["six_months_later"] . "<br>";
echo "1 Year Later: " . $row["one_year_later"] . "<br>";

// Example 3: Add hours to current datetime
echo "<br>Add Hours to Current DateTime:<br>";
$sql = "SELECT 
    CURRENT_TIMESTAMP() as now,
    DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 1 HOUR) as in_one_hour,
    DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 6 HOUR) as in_six_hours,
    DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 24 HOUR) as tomorrow_same_time
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Now: " . $row["now"] . "<br>";
echo "In 1 Hour: " . $row["in_one_hour"] . "<br>";
echo "In 6 Hours: " . $row["in_six_hours"] . "<br>";
echo "Tomorrow (Same Time): " . $row["tomorrow_same_time"] . "<br>";

// Example 4: Add minutes and seconds
echo "<br>Add Minutes and Seconds:<br>";
$sql = "SELECT 
    CURRENT_TIMESTAMP() as now,
    DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 30 MINUTE) as in_thirty_min,
    DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 60 SECOND) as in_one_min
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Now: " . $row["now"] . "<br>";
echo "In 30 Minutes: " . $row["in_thirty_min"] . "<br>";
echo "In 1 Minute: " . $row["in_one_min"] . "<br>";

// Example 5: Complex interval (days and hours combined)
echo "<br>Complex Interval Example:<br>";
$sql = "SELECT 
    CURRENT_TIMESTAMP() as now,
    DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL '10-5' DAY_HOUR) as ten_days_five_hours_later
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Now: " . $row["now"] . "<br>";
echo "10 Days 5 Hours Later: " . $row["ten_days_five_hours_later"] . "<br>";

// Example 6: Practical use case - Event scheduling
echo "<br>Practical Use Case - Event Scheduling:<br>";
$sql = "SELECT 
    CURRENT_TIMESTAMP() as registration_date,
    DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 7 DAY) as event_date,
    DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 14 DAY) as reminder_date,
    DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 30 DAY) as follow_up_date
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Registration Date: " . $row["registration_date"] . "<br>";
echo "Event Date (7 days later): " . $row["event_date"] . "<br>";
echo "Reminder Date (14 days later): " . $row["reminder_date"] . "<br>";
echo "Follow-up Date (30 days later): " . $row["follow_up_date"] . "<br>";

$conn->close();
?>
