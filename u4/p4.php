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
           
        $stmt = $conn->prepare("INSERT INTO student1(name, email,city)Values(?,?,?)");
        
        $name = "Raj";
        $email = "raj@gmail.com";
        $city = "Rajkot";

        $stmt->bind_param("sss",$name, $email, $city);

        if($stmt->execute()){
            echo "Record Inseted Successfully";   
        }
        else{
            echo "Error";
        }

        $stmt->close();
        $conn->close();
    ?>

</body>
</html>