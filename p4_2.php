<?php

// Get current month number (1-12)
$currentMonth = date('n'); // inbuilt date function

// Using if...else to determine and print the month
if ($currentMonth == 6) {
    echo "Current month is: June";
} else{
    echo "unable to determine month";
}

?>