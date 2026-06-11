<?php
$nm = $_GET['uname'];
echo "<h3> Entered Values:</h3>";
foreach($nm as $val){
    echo $val."<br>";
}

?>
    <form method="post">
        <h3> Enter Names </h3>
        <input type="text" name ="uname[0]"> <br>
        <input type="text" name ="uname[1]"> <br>
        <input type="text" name ="uname[2]"> <br>
        
    </form>
<?php
}
?>

