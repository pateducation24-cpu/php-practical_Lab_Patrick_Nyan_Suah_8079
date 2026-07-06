<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Push Demo</title>
</head>
<body>
    <h2>Array Push Demo</h2>

    <?php
    $fruits = array('Apple', 'Banana');

    echo '<h3>Original Array:</h3>';
    foreach ($fruits as $fruit) {
        echo $fruit . '<br>';
    }

    array_push($fruits, 'Orange', 'Mango');

    echo '<h3>Array After array_push():</h3>';
    foreach ($fruits as $fruit) {
        echo $fruit . '<br>';
    }
    ?>
</body>
</html>
