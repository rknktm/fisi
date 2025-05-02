
<?php
$alphabet = "abcdefghijklmnopqrstuvwxyz ";
$x = 0;
$name = ["b","o","b"," ","s","t","u","d","e","h","i"];
$y = 0;
$len = strlen($alphabet) ;
$vor_nach ="";
while($len > $x ){
    if ($alphabet[$x] == $name[$y])
    {
        #echo "$alphabet[$x]: $x \n ";
        $vor_nach = $vor_nach.$alphabet[$x];
        $y ++;
        $x = -1;
    }
    $x ++;
}
echo "\$vor_nach = $vor_nach";
echo "\n";
$arr = explode(" ",$vor_nach);
$vor = strtoupper($arr[0][0]).substr($arr[0], 1, 2);
$nach = strtoupper($arr[1][0]).substr($arr[1], 1, 6);

echo "$vor $nach\n" ;
print "$vor\n";
print "$nach\n";
?>