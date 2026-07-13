<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// MySQL LENGTH() Function - Returns the length of a string
$sql = "SELECT 
    'OpenAI ChatGPT' AS string,
    LENGTH('OpenAI ChatGPT') AS length_value
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<h2>MySQL LENGTH() Function</h2>";
    echo "<p>The LENGTH() function returns the number of characters in a string.</p>";
    
    while ($row = $result->fetch_assoc()) {
        echo "String: " . $row["string"] . "<br>";
        echo "Length: " . $row["length_value"] . " characters";
    }
} else {
    echo "Query Error";
}

$conn->close();
