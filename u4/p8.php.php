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

            if ($conn){
                echo "Database Connected Successfully. <br><br>";
            }
            else{
                die("Connection Failed" . $conn->connect_error());
            }

            $sql = "SELECT * FROM students3 LIMIT 3";

            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc())
                {
                    echo "ID : " . $row["id"] . "<br>";
                    echo "Name : " . $row["name"] . "<br>";
                    echo "Email : " . $row["email"] . "<br>";
                    echo "City : " . $row["city"] . "<br><br>";
                }
            }
            else{
                echo "No Records Found.";
            }
        ?>
    </body>
</html>