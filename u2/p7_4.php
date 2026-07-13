<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// MySQL TRIM(), RTRIM(), LTRIM() Functions - Remove whitespace
$sql = "SELECT 
    '   OpenAI ChatGPT   ' AS original,
    TRIM('   OpenAI ChatGPT   ') AS trim_result,
    LTRIM('   OpenAI ChatGPT   ') AS ltrim_result,
    RTRIM('   OpenAI ChatGPT   ') AS rtrim_result
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<h2>MySQL TRIM(), RTRIM(), LTRIM() Functions</h2>";
    echo "<p>These functions remove whitespace from strings.</p>";
    echo "<ul>";
    echo "<li>TRIM() - removes from both sides</li>";
    echo "<li>LTRIM() - removes from left side</li>";
    echo "<li>RTRIM() - removes from right side</li>";
    echo "</ul>";
    
    while ($row = $result->fetch_assoc()) {
        echo "Original: '[" . $row["original"] . "]<br>";
        echo "TRIM(): '[" . $row["trim_result"] . "]'<br>";
        echo "LTRIM(): '[" . $row["ltrim_result"] . "]'<br>";
        echo "RTRIM(): '[" . $row["rtrim_result"] . "]'";
    }
} else {
    echo "No result found";
}

$conn->close();
?>
