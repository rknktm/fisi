<?php


echo "Collatz-Folge für 6 bis 1\n";
for ($j = 6; $j >= 1; $j--) {
    $next = $j;
    if ($j == 1) {
        echo "$j--> $j";
        break;
    }
    echo "$next--> ";
    while ($next != 1) {
        if ($next % 2 == 0) {
            $next = $next/2;
            echo "$next  ";
            if ($next ==1){
                echo "\n";
                break;
            }
        }
        else{
            $next = $next*3 + 1;
            echo "$next  ";
        }
    }
}
