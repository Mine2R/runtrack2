<?php
function occurence($str, $char) {
     return substr_count(strtolower($str), strtolower($char));
    }
$str = "Bonjour";
$char = "O";
echo "le nombre d'occurence est de $char dans $str est de : " .occurence($str, $char);
?>
   