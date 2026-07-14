<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// MySQL LCASE(), UCASE() Functions - Convert case
$sql = "SELECT 
    'OpenAI ChatGPT' AS original,
    LCASE('OpenAI ChatGPT') AS lowercase,
    UCASE('OpenAI ChatGPT') AS uppercase,
    LOWER('OpenAI ChatGPT') AS lower_alias,
    UPPER('OpenAI ChatGPT') AS upper_alias
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<h2>MySQL LCASE(), UCASE() Functions</h2>";
    echo "<p>LCASE/LOWER converts to lowercase. UCASE/UPPER converts to uppercase.</p>";
    
    while ($row = $result->fetch_assoc()) {
        echo "Original: " . $row["original"] . "<br>";
        echo "LCASE(): " . $row["lowercase"] . "<br>";
        echo "UCASE(): " . $row["uppercase"] . "<br>";
        echo "LOWER(): " . $row["lower_alias"] . "<br>";
        echo "UPPER(): " . $row["upper_alias"];
    }
} else {
    echo "No result found";
}

$conn->close();
?>
