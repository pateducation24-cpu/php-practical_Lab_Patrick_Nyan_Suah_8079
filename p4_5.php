<?php
$age = 65;
$isCitizen = true;

echo "Age: $age<br>";
echo "Citizen: " . ($isCitizen? "Yes" : "No") . "<br><br>";

// Nested if statement
if ($age >= 60) {
    echo "Person eligible to  vote.<br>";
    
    if ($isCitizen) {
        echo "✅ Eligible";
    }
    
}
?>