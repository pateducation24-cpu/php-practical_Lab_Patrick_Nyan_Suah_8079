<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['fruits'];
    $myarray = explode(",", $input);
    
    $reversed_array = array_reverse($myarray);
    
    echo "You entered (original order):<br>";
    foreach($myarray as $fruits){
        echo trim($fruits) . "<br>";
    }
    
    echo "<br>Reversed order:<br>";
    foreach($reversed_array as $fruits){
        echo trim($fruits) . "<br>";
    }
} else {
?>
    <form method="post">
        Enter fruit names (separated by comma):<br>
        <input type="text" name="fruits" placeholder="enter fruits names">
        <br><br>
        <input type="submit" value="Submit">
    </form>
<?php
}
?>
