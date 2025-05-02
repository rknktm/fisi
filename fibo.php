<?php
$x=1;
$a = 0;
$b = 1;
do {
    $next= $a+$b;
    $a = $b;
    $b = $next;
    echo ("$next ");
    $x +=1;
}
while ($x <5);