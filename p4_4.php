<?php
// Using switch with date('F')
$month = date('F');

switch ($month) {
    case 'june':
    case 'July':
    case 'December':
        echo "Current month is: " . $month;
        break;
    default:
        echo "Unable to determine month";
}
?>