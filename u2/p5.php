<?php
$value = "123";

echo "Before casting:\n";
echo "Value: $value\n";
echo "Type: " . gettype($value) . "<br><br>";

settype($value, "integer");

echo "After casting to integer:.<br>";
echo "Value: $value.<br>";
echo "Type: " . gettype($value) . "\n";
