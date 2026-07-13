<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// MySQL CONCAT_WS() Function - Concatenates strings with separator
$sql = "SELECT 
    CONCAT_WS('-', 'OpenAI', 'ChatGPT', 'AI') AS hyphen_separated,
    CONCAT_WS(' | ', 'PHP', 'MySQL', 'JavaScript') AS pipe_separated,
    CONCAT_WS(', ', 'Apple', 'Banana', 'Orange') AS comma_separated
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<h2>MySQL CONCAT_WS() Function</h2>";
    echo "<p>The CONCAT_WS() function joins multiple strings with a specified separator.</p>";
    
    while ($row = $result->fetch_assoc()) {
        echo "Hyphen Separated: " . $row["hyphen_separated"] . "<br>";
        echo "Pipe Separated: " . $row["pipe_separated"] . "<br>";
        echo "Comma Separated: " . $row["comma_separated"];
    }
} else {
    echo "No result found";
}

$conn->close();
?>
