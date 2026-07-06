<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Shift Demo</title>
</head>
<body>
    <h2>Array Shift Demo</h2>

    <?php
    $fruits = array('Apple', 'Banana', 'Orange');

    echo '<h3>Original Array:</h3>';
    foreach ($fruits as $fruit) {
        echo $fruit . '<br>';
    }

    $firstFruit = array_shift($fruits);

    echo '<h3>Removed First Value:</h3>';
    echo $firstFruit . '<br>';

    echo '<h3>Array After array_shift():</h3>';
    foreach ($fruits as $fruit) {
        echo $fruit . '<br>';
    }
    ?>
</body>
</html>
