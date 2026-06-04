<?php
$myarray = ["grapes","Lemon","Cocoa"];

$myarray2 = ["Banana","pineapple","Cucumber"];

$mergedarray = array_merge($myarray, $myarray2);
foreach($mergedarray as $arrayResult){
    echo $arrayResult."<br>";
}

?>