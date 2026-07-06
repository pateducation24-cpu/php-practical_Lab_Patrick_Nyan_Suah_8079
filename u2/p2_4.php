<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Combine Demo</title>
</head>
<body>
    <h2>Array Combine Demo</h2>

    <?php
    $keys = array('Name', 'Age', 'City');
    $values = array('John', 25, 'Dhaka');

    $result = array_combine($keys, $values);

    echo '<h3>Combined Array:</h3>';
    foreach ($result as $key => $value) {
        echo $key . ' => ' . $value . '<br>';
    }
    ?>
</body>
</html>
