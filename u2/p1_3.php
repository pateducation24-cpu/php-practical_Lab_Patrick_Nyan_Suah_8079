

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Days in Month</title>
</head>
<body>
    <h2>Enter Month Name to Find Days</h2>
    <form method="post">
        <input type="text" name="month" placeholder="e.g., January" required>
        <button type="submit">Show Days</button>
    </form>

    <?php
    //error_reporting(0);
    $months = array(
        "January" => 31,
        "February" => 28,
        "March" => 31,
        "April" => 30,
        "May" => 31,
        "June" => 30,
        "July" => 31,
        "August" => 31,
        "September" => 30,
        "October" => 31,
        "November" => 30,
        "December" => 31
    );
    

    $user_month = $_POST['month'];

    echo "<p>Month: $user_month</p>";
    echo "<p>Days: " . $months[$user_month] . "</p>"."<br><br>";

    // Sort array
    echo "<p>Months Before Sorting:</p>";
    print_r($months);
    echo "<br>";

    sort($months);

    echo "<p>Months After Sorting:</p>";
    print_r($months);
    ?>
</body>
</html>