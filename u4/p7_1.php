<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <?php
       if($conn){
        echo "Database Connected Successfully.<br>";
       }

       else{
        die("Connection Failed".$conn->connect_error());
       }

       $sql = "UPDATE student2
       SET name = 'James',
            email = 'james@gmail.com',
            city = 'Monrovia'
            WHERE id = 1";
        if($conn->query($sql)){
            echo "<br> Record Udated Successfully.";
        }
        else{
            echo "Error";
        }

        $conn-close();
    ?>


</body>
</html>