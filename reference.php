<?php
function sum(&$value){
$value += 6;
}
$num = 3;
sum($num);
echo $num;
?>