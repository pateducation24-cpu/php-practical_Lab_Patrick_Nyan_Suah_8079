<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Array Demo</title>
</head>
<body>
    <h2>Simple Array Demo</h2>

    <?php
    $array = array(
        "Name" => "John",
        "Age" => 25,
        "City" => "Dhaka"
    );

    $lower = array_change_key_case($array, CASE_LOWER);
    $upper = array_change_key_case($array, CASE_UPPER);

    echo '<h3>Original Array</h3>';
    foreach ($array as $key => $value) {
        echo "$key: $value<br>";
    }

    echo '<h3>Lowercase Keys</h3>';
    foreach ($lower as $key => $value) {
        echo "$key: $value<br>";
    }

    echo '<h3>Uppercase Keys</h3>';
    foreach ($upper as $key => $value) {
        echo "$key: $value<br>";
    }
    ?>
</body>
</html>

