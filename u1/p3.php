<?php

$a = 50;
$b = 20;

echo "a = ".$a."<br>";
echo "b = ".$b."<br>"."<br>";

$c= $a+$b;
echo "Additon:".$c."<br>";

$d = $a*$b;
echo "Multiplication:".$d."<br>";
$e = $a**$b;

$div = $a/$b;
echo "Division:".$div."<br>";

$sub =$a-$b;
echo "Subtraction:".$sub."<br>";

if ($a == $b){
    echo "a = b";
   } else{
        echo "Equality:both are not equla"."<br>";
    }




$unary_operator = $a++;
echo "Unary Operation:".$unary_operator."<br>";

echo "Exponentiation:".$e."<br>";

$f = $b%$a;
echo "Modulus Operation:".$f."<br>";



?>
