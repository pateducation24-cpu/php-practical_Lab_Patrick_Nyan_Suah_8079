<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['fruits'];
    $myarray = explode(",", $input);
    
    echo "You entered:<br>";
    foreach($myarray as $fruits){
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

