<?php
$word = "Abcdefg";
$vowels = "";
$consonants = "";


for ($i = 0; $i < strlen($word); $i++) {
    $ch = strtolower($word[$i]);
    if (ctype_alpha($ch)) { 
        if (in_array($ch, ['a', 'e', 'i', 'o', 'u'])) {
            $vowels .= $word[$i];
        } else {
            $consonants .= $word[$i];
        }
    }
}

echo "Word: " . $word . "<br>";
echo "Vowels: " . $vowels . "<br>";
echo "Consonants: " . $consonants;
?>
