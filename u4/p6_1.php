<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <?php
        $conn = new mysqli("localhost","root","", "studentdb");
        if($conn->connect_error){
            die("Connection Failed");
        }

        $sql = "DELETE FROM student1 WHERE id = 2";
        if($conn->query($sql)){
            echo "Rcord Deleted Successfully.";
        }
        else{
            echo "Error";
        }
        $conn->close();
    ?>


</body>
</html>