<html lang="en">
<body>
<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=studentdb","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE IF NOT EXISTS student2
    (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50),
        email VARCHAR(50),
        city VARCHAR(30)
    )";

    $conn->exec($sql);
    echo "Table Created Successfully.";
}
catch(PDOException $e){
    echo "Connection Failed:" . $e->getMessage();
}

$conn = null;

?>
</body>
</html>