<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php
    $conn = new mysqli("localhost", "root", "", "studentdb");
    if($conn){
        $sql = "CREATE TABLE IF NOT EXISTS student1(
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50),
            email VARCHAR(50),
            city VARCHAR(50)
        )";

        if(mysqli_query($conn, $sql)){
            echo "Table Created Successfully.";
        }
        else{
            echo "Error:".$conn->error;
        }
    }
    $conn->close();

    ?>

</body>
</html>