<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sort Array</title>
</head>
<body>
    <h2>Sort Array</h2>

    <form method="post">
        Enter numbers (separated by comma):
        <input type="text" name="numbers" required>
        <button type="submit">Sort</button>
    </form>

    <?php
   
        $input = $_POST['numbers'];
        $array = explode(',', $input);

        sort($array);

        echo '<h3>Sorted Array:</h3>';
        foreach ($array as $value) {
            echo $value . '<br>';
        }
  
    ?>
</body>
</html>
