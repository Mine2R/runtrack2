<?php
$original_string = "Certaines choses changent, et d'autres ne changeront jamais.";
$new_string = "";
$length = strlen($original_string);

for ($i = 0; $i < $length; $i++) {
    $new_string .= $original_string[($i + 1) % $length];
}
echo "Chaîne originale: " . $original_string . "\n";
echo "Nouvelle chaîne: " . $new_string . "\n";
?>