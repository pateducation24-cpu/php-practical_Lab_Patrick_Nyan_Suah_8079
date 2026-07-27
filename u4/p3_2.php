<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <?php
    
         $conn = new PDO("mysql:host=localhost;dbname=studentdb","root","");
        $sql = "INSERT INTO student2(name, email, city) 
        VALUES ('Paias', 'paisa@gamil.com','Rajkot')";

            $conn->exec($sql);
            echo "Record Inserted Successfully.";
    ?>

</body>
</html>