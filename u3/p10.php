<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "studentdb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];
    
    // Insert data into admission table
    $sql = "INSERT INTO admission (name, email, course, contact) 
            VALUES ('$name', '$email', '$course', '$contact')";
    
    if (mysqli_query($conn, $sql)) {
        $message = "Registration Successful! Welcome " . $name;
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    
    <?php if($message != "") { ?>
        <h3><?php echo $message; ?></h3>
    <?php } ?>
    
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label>Course:</label>
        <input type="text" name="course" required><br><br>
        
        <label>Contact:</label>
        <input type="text" name="contact" required><br><br>
        
        <input type="submit" value="Register">
        <input type="reset" value="Clear">
    </form>
</body>
</html>