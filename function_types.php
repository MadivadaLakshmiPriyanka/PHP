<?php
$number=2;
function doubleIt($number){
return $number *=2;
}
$doubled=doubleIt(8);
echo '$doubled is ' . $doubled . '<br>';
echo '$number is ' . $number . '<br>';
