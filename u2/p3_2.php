<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Chunk Demo</title>
</head>
<body>
    <h2>Array Chunk Demo</h2>


</body>
</html>


    <?php
    $months = array(
        'January', 'February', 'March', 'April',
        'May', 'June', 'July', 'August',
        'September', 'October', 'November', 'December'
    );

    $chunkedMonths = array_chunk($months, 4);

    echo '<h3>Original Months Array:</h3>';
    foreach ($months as $month) {
        echo $month . '<br>';
    }

    echo '<h3>Chunked into Groups of 4:</h3>';
    foreach ($chunkedMonths as $group) {
        echo '<ul>';
        foreach ($group as $month) {
            echo '<li>' . $month . '</li>';
        }
        echo '</ul>';
    }

    ?>

