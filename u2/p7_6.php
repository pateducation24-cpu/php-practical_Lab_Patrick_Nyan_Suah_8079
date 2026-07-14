<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// MySQL STRSTR(), SUBSTR() Functions
$sql = "SELECT 
    'OpenAI ChatGPT' AS original,
    SUBSTR('OpenAI ChatGPT', 1, 6) AS substr_first_6,
    SUBSTR('OpenAI ChatGPT', 9) AS substr_from_9,
    SUBSTR('OpenAI ChatGPT', -5) AS substr_last_5,
    STRSTR('OpenAI ChatGPT', 'ChatGPT') AS strstr_result
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<h2>MySQL STRSTR(), SUBSTR() Functions</h2>";
    echo "<p>SUBSTR() extracts part of a string. STRSTR() finds substring from first occurrence.</p>";
    
    while ($row = $result->fetch_assoc()) {
        echo "Original: " . $row["original"] . "<br>";
        echo "SUBSTR (first 6 chars): " . $row["substr_first_6"] . "<br>";
        echo "SUBSTR (from position 9): " . $row["substr_from_9"] . "<br>";
        echo "SUBSTR (last 5 chars): " . $row["substr_last_5"] . "<br>";
        echo "STRSTR ('ChatGPT'): " . $row["strstr_result"];
    }
} else {
    echo "No result found";
}

$conn->close();
?>
