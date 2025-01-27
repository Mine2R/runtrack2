<?php
function toleetspeak($str) {
    $leetmap = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'C' => '<', 'c' => '<',
        'D' => '|)', 'd' => '|)',
        'E' => '3', 'e' => '3',
        'F' => '|=', 'f' => '|=',
        'G' => '6', 'g' => '6',
        'H' => '#', 'h' => '#',
        'I' => '1', 'i' => '1',
        'J' => '_|', 'j' => '_|',
        'K' => '|<', 'k' => '|<',
        'L' => '1', 'l' => '1',
        'M' => '|\/|', 'm' => '|\/|',
        'N' => '|\|', 'n' => '|\|',
        'O' => '0', 'o' => '0',
        'P' => '|2', 'p' => '|2',
        'Q' => 'O_', 'q' => 'O_',
        'R' => '|2', 'r' => '|2',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7',
        'U' => '(_)', 'u' => '(_)',
        'V' => '\/', 'v' => '\/',
        'W' => '\/\/', 'w' => '\/\/',
        'X' => '><', 'x' => '><',
        'Y' => '`/', 'y' => '`/',
        'Z' => '2', 'z' => '2'
    ];

    $result = '';

    for ($i = 0; isset($str[$i]); $i++) {
        $char = $str[$i];
        if (isset($leetmap[$char])) {
            $result .= $leetmap[$char];
        } else {
            $result .= $char;
        }
    }

    return $result;
}

$str = "Cooki est gentil";
echo "La chaine en leetspeak est : " . toleetspeak($str);
?>
