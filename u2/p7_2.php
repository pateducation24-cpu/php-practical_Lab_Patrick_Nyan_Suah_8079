<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// MySQL CONCAT() Function - Concatenates strings together
$sql = "SELECT 
    'OpenAI' AS string1,
    'ChatGPT' AS string2,
    CONCAT('OpenAI', ' ', 'ChatGPT') AS concatenated
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<h2>MySQL CONCAT() Function</h2>";
    echo "<p>The CONCAT() function joins multiple strings together.</p>";
    
    while ($row = $result->fetch_assoc()) {
        echo "String 1: " . $row["string1"] . "<br>";
        echo "String 2: " . $row["string2"] . "<br>";
        echo "Concatenated: " . $row["concatenated"];
    }
} else {
    echo "No result found";
}

$conn->close();
?>
