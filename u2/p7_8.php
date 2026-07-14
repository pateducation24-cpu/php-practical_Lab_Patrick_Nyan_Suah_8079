<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// MySQL REPEAT(), REPLACE() Functions
$sql = "SELECT 
    'Ha' AS original,
    REPEAT('Ha', 3) AS repeat_result,
    'OpenAI ChatGPT' AS text,
    REPLACE('OpenAI ChatGPT', 'ChatGPT', 'Claude') AS replace_result,
    REPEAT('*', 10) AS stars
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<h2>MySQL REPEAT(), REPLACE() Functions</h2>";
    echo "<p>REPEAT() repeats a string. REPLACE() substitutes text within a string.</p>";
    
    while ($row = $result->fetch_assoc()) {
        echo "REPEAT ('Ha', 3): " . $row["repeat_result"] . "<br>";
        echo "Original text: " . $row["text"] . "<br>";
        echo "REPLACE 'ChatGPT' with 'Claude': " . $row["replace_result"] . "<br>";
        echo "REPEAT ('*', 10): " . $row["stars"];
    }
} else {
    echo "No result found";
}

$conn->close();
?>
