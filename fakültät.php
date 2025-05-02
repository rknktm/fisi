<?php
$fak = 1;
$i = 4;
do {
    $fak *= $i;
    $i -=1;
}
while ($i > 0);
print ("$fak");