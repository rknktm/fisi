<?php

$upperChars = range("A", "Z");
$lowerChars = range("a", "z");
$numbers = range("0", "9");
$symbols = array("!", "#", "$", "%", "&", "*", "+", "-", "?", "@");
$all = array($upperChars, $lowerChars, $numbers, $symbols);
$all2 = array_merge($upperChars, $lowerChars, $numbers, $symbols);
$appended = "";
$password = "";
$upper_chr = 0;
$lower_chr = 0;
$number_chr = 0;
$special_chr = 0;

#Start time
$start = microtime(true);
#Select one character from each array and fulfill the required conditions.
for ($i = 0; $i < count($all); $i++) {
    for ($j = 0; $j < count($all[$i]); $j++) $appended .= $all[$i][$j];
    $arr1 = str_split($appended);
    $password .= $arr1[random_int(0, $j - 1)];
    $appended = "";
}
# Randomly select the remaining 4 characters from among all
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < count($all2); $j++) $appended .= $all2[$j];

    $arr1 = str_split($appended);
    $password .= $arr1[random_int(0, $j - 1)];
}
#end time
$end = microtime(true);
$elapsed = $end - $start;

#Wie oft jeder charakter ist benutzt
for ($i = 0; $i < strlen($password); $i++) {
    $char = $password[$i];
    if (ctype_upper($char)) {
        $upper_chr +=1;  
    } elseif (ctype_lower($char)) {
        $lower_chr +=1;
    } elseif (ctype_digit($char)) {
        $number_chr +=1;
    } else {
        $special_chr +=1;
    }
}


#Darstellung von Passwortanalyse
echo "\n\t*** PASSWORTGENERATOR ***\n\n";
# Shuffle selected characters
echo 'Generiertes Passwort ⇒ ' . str_shuffle($password) ."\n\n" ;
echo 'Verstrichene Zeit in Millisekunden ⇒ ' . $elapsed * 1000 . "\n\n";
echo "Charakteranalyse\n";

#Prüfung Vorhanden von jeder Zeichen
if ($upper_chr != 0){
    echo "\t⇒ Gr0ßbuchstabe"."\t✓\t $upper_chr-mal\n";
}
else{
    print "\t⇒ Gr0ßbuchstabn"."\t✓X \t $upper_chr-mal\n";
}
if ($lower_chr != 0){
    echo "\t⇒ Kleinbuchstabe"."\t✓\t $lower_chr-mal\n";
}
else {
    print "\t⇒ Kleinbuchstaben"."\tX\t $lower_chr-mal\n";
}
if ($number_chr != 0){
    print "\t⇒ Zahlen_Vorhanden"."\t✓\t $number_chr-mal\n";
}
else {
    print "\⇒ Zahlen_Vorhanden"."\tX\t $$number_chr-mal\n";
}
if ($special_chr != 0){
    print "\t⇒ Sonderzeichen"."\t✓\t $special_chr-mal\n";
}
else{
    print "\t⇒ Sonderzeichen"."\t✓X\t $special_chr-mal\n";
}

print "ERFOLG!";

sleep(10);
