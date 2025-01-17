<?php
function calcule($number1, $operation, $number2) {
    if ($operation == '+') {
        return $number1 + $number2;
    } elseif ($operation == '-') {
        return $number1 - $number2;
    } elseif ($operation == '*') {
        return $number1 * $number2;
    } elseif ($operation == '/') {
        if ($number2 != 0) {
            return $number1 / $number2;
        } else {
            return "Erreur : Division par zéro";
        }
    } elseif ($operation == '%') {
        if ($number2 != 0) {
            return $number1 % $number2;
        } else {
            return "Erreur : Modulo par zéro";
        }
    } else {
        return "Opération non valide";
    }
}

// Exemples d'appel de la fonction
echo calcule(10, '+', 5); // Affiche 15
echo "<br>";
echo calcule(10, '-', 5); // Affiche 5
echo "<br>";
echo calcule(10, '*', 5); // Affiche 50
echo "<br>";
echo calcule(10, '/', 5); // Affiche 2
echo "<br>";
echo calcule(10, '%', 3); // Affiche 1
echo "<br>";
echo calcule(10, '/', 0); // Affiche "Erreur : Division par zéro"
?>


    

       
    
