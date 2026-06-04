<?php

$global_var = 25;
echo "Global Variable:{$global_var} <br> ";

function local_var(){
    $num = 45; //local Variable
    echo "Local variable declared inside the function is:{$num} <br>";
}  
local_var();


?>
