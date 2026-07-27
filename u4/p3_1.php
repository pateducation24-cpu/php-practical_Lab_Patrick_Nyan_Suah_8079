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
        $sql = "INSERT INTO student1(name, email, city) 
        VALUES ('Patrick', 'pat@gamil.com','Rajkot')";
        if(mysqli_query($conn,$sql)){
            echo "Record Inserted Successfully.";
            
        }
        else{
            echo "Error";
        }


    ?>

</body>
</html>