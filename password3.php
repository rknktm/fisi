<?php
$upperChars = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","R","Q","S","T","U","V","W","X","Y","Z");
$lowerChars = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","q","s","t","u","v","w","x","y","z");
$numbers = array("1","2","3","4","5","6","7","8","9","0");
$symbols = array("!","#","$","%","&","*","+","-","?","@");
$all = array($upperChars,$lowerChars,$numbers,$symbols);
$appended = ("");
$password = ("");
#Select one character from each array and fulfill the required conditions.
for ($i = 0; $i < count($all); $i++) {
    for ($j = 0; $j < count($all[$i]); $j++) {
        $appended .= $all[$i][$j];
    }
    $arr1 = str_split(str_shuffle($appended),1);
    $random_keys=array_rand($arr1,2);
    $password = $password.($arr1[$random_keys[0]]);
    $appended = ("");
}
# Randomly select the remaining 4 characters from among all
for ($i = 0; $i < count($all); $i++) {
    for ($j = 0; $j < count($all[$i]); $j++) {
        $appended .= $all[$i][$j];
    }
    $arr1 = str_split(str_shuffle($appended),1);
    $random_keys=array_rand($arr1,2);
    $password = $password.($arr1[$random_keys[0]]);
}
# Shuffle selected characters
echo "Generiertes Passwort: ".str_shuffle($password)."\n";
echo "Erfolg!";






