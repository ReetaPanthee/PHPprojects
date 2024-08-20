<?php
function divide($numerator, $denominator) {
 assert($denominator != 0, 'Division by zero');
 return $numerator / $denominator;
}
echo divide(10, 0);
?>