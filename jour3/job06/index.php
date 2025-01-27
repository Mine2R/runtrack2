<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
$strlen = mb_strlen($str);
for( $i = $strlen -1; $i >= 0; $i--){
    echo mb_substr($str, $i, 1);
} 
?>
