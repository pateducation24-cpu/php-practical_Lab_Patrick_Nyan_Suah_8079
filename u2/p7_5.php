<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// MySQL LPAD(), RPAD(), LOCATE() Functions
$sql = "SELECT 
    'ChatGPT' AS original,
    LPAD('ChatGPT', 15, '*') AS lpad_result,
    RPAD('ChatGPT', 15, '-') AS rpad_result,
    LOCATE('GPT', 'ChatGPT') AS locate_result
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<h2>MySQL LPAD(), RPAD(), LOCATE() Functions</h2>";
    echo "<p>LPAD/RPAD pad strings with characters. LOCATE finds position of substring.</p>";
    
    while ($row = $result->fetch_assoc()) {
        echo "Original: " . $row["original"] . "<br>";
        echo "LPAD (pad left with *): " . $row["lpad_result"] . "<br>";
        echo "RPAD (pad right with -): " . $row["rpad_result"] . "<br>";
        echo "LOCATE ('GPT' in 'ChatGPT'): Position " . $row["locate_result"];
    }
} else {
    echo "No result found";
}

$conn->close();
?>
