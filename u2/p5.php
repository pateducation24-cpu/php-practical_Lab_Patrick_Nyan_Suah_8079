<?php
$value = "11";

echo "Before casting:\n";
echo "Value: $value\n";
echo "Type: " . gettype($value) . "<br><br>";

settype($value, "integer");

echo "After casting to integer:.<br>";
echo "Value: $value.<br>";
echo "Type: " . gettype($value)."\n";


settype($value, "double");
echo"<br>";
echo "<b> After convertingt to double:</b>".$value."<br>";
echo "<b> Data Type:</b>".gettype($value)."<br><br>";

settype($value,"boolean");
echo "<b> After Converting to Boolean:</b>";

var_dump($value);

echo "<br><b> Data Type:</b>".gettype($value);


?>