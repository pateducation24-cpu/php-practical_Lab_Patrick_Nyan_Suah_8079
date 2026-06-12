<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Laptop Demo</title>
</head>
<body>
    <h2>Simple Laptop Demo</h2>

    <?php
    if (isset($_POST['next'])) {
        $count = $_POST['count'];
        
        echo '<form method="post">';
        echo '<input type="hidden" name="count" value="' . $count . '">';
        for ($i = 0; $i < $count; $i++) {
            echo '<p>Laptop ' . ($i + 1) . '<br>';
            echo 'Company: <input type="text" name="company[]"><br>';
            echo 'Model: <input type="text" name="model[]"><br>';
            echo 'Price: <input type="text" name="price[]"><br>';
            echo '</p>';
        }
        
        echo '<button type="submit" name="save">Save</button>';
        echo '</form>';
        
    } elseif (isset($_POST['save'])) {
        $count = $_POST['count'];
        
        echo '<p>Result:</p>';
        for ($i = 0; $i < $count; $i++) {
            echo '<p>' . $_POST['company'][$i] . ' - ' . $_POST['model'][$i] . ' - ' . $_POST['price'][$i] . '</p>';
        }
        
    } else {
        echo '<form method="post">';
        echo 'How many laptops? <input type="text" name="count"><br>';
        echo '<button type="submit" name="next">Next</button>';
        echo '</form>';
    }
    ?>
</body>
</html>