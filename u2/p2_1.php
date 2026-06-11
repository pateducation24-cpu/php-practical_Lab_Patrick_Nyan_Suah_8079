<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Day Finder</title>
</head>
<body>
    <h2>Enter a number (0 to 6)</h2>
    <form method="post">
        <input type="number" name="day_number" min="0" max="6" required>
        <button type="submit">Show Day</button>
    </form>
</body>
</html>

    <?php
    
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    
    if (isset($_POST['day_number'])) {
        $input = $_POST['day_number']; 
            echo "<p>Day: " . $days[$input] . "</p>"; 
    }     
    ?>
