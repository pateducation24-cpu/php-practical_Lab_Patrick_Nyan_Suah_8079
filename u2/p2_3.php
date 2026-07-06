<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Count Values Demo</title>
</head>
<body>
    <h2>Array Count Values Demo</h2>

    <?php
    $colors = array('red', 'blue', 'red', 'green', 'blue', 'red');

    $counted = array_count_values($colors);

    echo '<h3>Original Array:</h3>';
    foreach ($colors as $color) {
        echo $color . '<br>';
    }

    echo '<h3>Count of Each Value:</h3>';
    foreach ($counted as $value => $count) {
        echo $value . ' = ' . $count . '<br>';
    }
    ?>
</body>
</html>
