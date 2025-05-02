<?php
$i = 1;
$number = 234;
$summe = 0;
while ($i <= 3){
    $rest = $number % 10;
    $number = ($number - $rest)/10;
    $i +=1;
    $summe = $summe + $rest;
}
print ("$summe");