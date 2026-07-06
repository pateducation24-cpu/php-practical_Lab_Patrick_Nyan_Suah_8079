<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Pop Demo</title>
</head>
<body>
    <h2>Array Pop Demo</h2>

    <?php
    $fruits = array('Apple', 'Banana', 'Orange', 'Mango');

    echo '<h3>Original Array:</h3>';
    foreach ($fruits as $fruit) {
        echo $fruit . '<br>';
    }

    $lastFruit = array_pop($fruits);

    echo '<h3>Removed Last Value:</h3>';
    echo $lastFruit . '<br>';

    echo '<h3>Array After array_pop():</h3>';
    foreach ($fruits as $fruit) {
        echo $fruit . '<br>';
    }
    ?>
</body>
</html>
