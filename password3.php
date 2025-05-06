
<?php
/**
 * @return void
 */
function password()
{
    $upperChars = range("A", "Z");
    $lowerChars = range("a", "z");
    $numbers = range("0", "9");
    $symbols = array("!", "#", "$", "%", "&", "*", "+", "-", "?", "@");
    $all = array($upperChars, $lowerChars, $numbers, $symbols);
    $appended = "";
    $password = "";
#Select one character from each array and fulfill the required conditions.
    for ($i = 0; $i < count($all); $i++) {
        for ($j = 0; $j < count($all[$i]); $j++) $appended .= $all[$i][$j];
        $arr1 = str_split(str_shuffle($appended));
        $random_keys = array_rand($arr1, 2);
        $password = $password . ($arr1[$random_keys[0]]);
        $appended = "";
    }
# Randomly select the remaining 4 characters from among all
    for ($i = 0; $i < count($all); $i++) {
        for ($j = 0; $j < count($all[$i]); $j++) $appended .= $all[$i][$j];
        $arr1 = str_split(str_shuffle($appended));
        $random_keys = array_rand($arr1, 2);
        $password = $password . ($arr1[$random_keys[0]]);
    }
# Shuffle selected characters
    echo "Generiertes Passwort: " . str_shuffle($password) . "\t";
}

password();

