<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Transformation</title>
</head>
<body>
    <form method="get" action="">
        <label for="str">Chaîne de caractères :</label>
        <input type="text" id="str" name="str" required><br><br>

        <label for="transformation">Transformation :</label>
        <select id="transformation" name="transformation" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select><br><br>

        <input type="submit" value="Valider">
    </form>

    <?php
    function gras($str) {
        $words = explode(' ', $str);
        foreach ($words as &$word) {
            if (ctype_upper($word[0])) {
                $word = "<strong>$word</strong>";
            }
        }
        return implode(' ', $words);
    }

    function cesar($str, $shift = 2) {
        $result = '';
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if (ctype_alpha($char)) {
                $ascii = ord($char);
                $base = ctype_upper($char) ? 65 : 97;
                $char = chr($base + (($ascii - $base + $shift) % 26));
            }
            $result .= $char;
        }
        return $result;
    }

    function plateforme($str) {
        $words = explode(' ', $str);
        foreach ($words as &$word) {
            if (substr($word, -2) === 'me') {
                $word = str_replace('me', '_', $word);
            }
        }
        return implode(' ', $words);
    }

    if (isset($_GET['str']) && isset($_GET['transformation'])) {
        $str = $_GET['str'];
        $transformation = $_GET['transformation'];

        switch ($transformation) {
            case 'gras':
                $result = gras($str);
                break;
            case 'cesar':
                $result = cesar($str);
                break;
            case 'plateforme':
                $result = plateforme($str);
                break;
            default:
                $result = $str;
        }

        echo "<p>Résultat de la transformation : " . $result . "</p>";
    }
    ?>
</body>
</html>

