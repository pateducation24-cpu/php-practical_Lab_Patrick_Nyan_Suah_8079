<?php
// Start session
session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "", "login");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$error_message = "";
$logged_in = false;

// Check if user is already logged in
if (isset($_SESSION['username'])) {
    $logged_in = true;
    $username = $_SESSION['username'];
}

// Handle Login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Query to check if user exists
    $sql = "SELECT * FROM students WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    // Check if user found
    if (mysqli_num_rows($result) == 1) {
        // User found - start session
        $_SESSION['username'] = $username;
        $logged_in = true;
        $username = $_SESSION['username'];
        $error_message = "Login successful! Welcome " . $username;
    } else {
        // User not found
        $error_message = "Invalid username or password!";
    }
}

// Handle Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        .container { max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        .error { color: red; }
        .success { color: green; }
        input[type="text"], input[type="password"] { width: 100%; padding: 8px; margin: 5px 0 15px 0; }
        input[type="submit"] { background: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer; }
        input[type="submit"]:hover { background: #45a049; }
        .logout-btn { background: #f44336; color: white; padding: 10px 20px; text-decoration: none; }
        .logout-btn:hover { background: #da190b; }
    </style>
</head>
<body>
    <div class="container">
        
        <?php if ($logged_in) { ?>
            <!-- HOME PAGE CONTENT -->
            <h2>Welcome to Home Page</h2>
            <h3>Hello, <?php echo $username; ?>!</h3>
            <p>You have successfully logged in.</p>
            
            <?php if($error_message != "" && strpos($error_message, "successful") !== false) { ?>
                <p class="success"><?php echo $error_message; ?></p>
            <?php } ?>
            
            <br>
            <a href="?logout=1" class="logout-btn">Logout</a>
            
        <?php } else { ?>
            <!-- LOGIN FORM -->
            <h2>Login Form</h2>
            
            <?php if($error_message != "") { ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php } ?>
            
            <form method="POST" action="">
                <label>Username:</label>
                <input type="text" name="username" required><br>
                
                <label>Password:</label>
                <input type="password" name="password" required><br>
                
                <input type="submit" name="login" value="Login">
            </form>
            
            
        <?php } ?>
        
    </div>
</body>
</html>