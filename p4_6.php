<?php
$marks = 85;
$category = "sports"; // sports, general, reserved

echo "Marks: $marks<br>";
echo "Category: $category<br><br>";

// Nested if-else statement
if ($marks >= 60) {
    echo "Basic eligibility: PASSED<br>";
    
    if ($category == "sports") {
        echo "🏆 Sports quota: Direct admission granted!";
    } else {
        echo "Regular category: Admission granted with marks criteria";
    }
    
} else {
    echo "Basic eligibility: FAILED<br>";
    
    if ($marks >= 50 && $category == "reserved") {
        echo "Reserved category: Considered for admission";
    } else {
        echo " Not eligible for admission";
    }
}
?>