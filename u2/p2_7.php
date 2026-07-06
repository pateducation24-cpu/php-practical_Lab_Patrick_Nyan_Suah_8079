<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Unshift Demo</title>
</head>
<body>
    <h2>Array Unshift Demo</h2>

    <?php
    $fruits = array('Banana', 'Orange');

    echo '<h3>Original Array:</h3>';
    foreach ($fruits as $fruit) {
        echo $fruit . '<br>';
    }

    array_unshift($fruits, 'Apple', 'Mango');

    echo '<h3>Array After array_unshift():</h3>';
    foreach ($fruits as $fruit) {
        echo $fruit . '<br>';
    }
    ?>
</body>
</html>
