<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <?php
    $conn = new mysqli("localhost","root","","studentdb");
    if($conn->connect_error){
        die("Connection Failed");
    }

    $sql = "SELECT * FROM student1";
    $result = $conn->query($sql);
    if($result->num_rows > 0 ){
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>City</th></tr>";

        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["city"]."</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    else{
        echo "NO Records Found.";
    }

    $conn->close();
    ?>

</body>
</html>