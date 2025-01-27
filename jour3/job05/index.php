<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte de Voyelles et Consonnes</title>
</head>
<body>
    <?php
    $str = "On n est pas le meilleur quand on le croit mais quand on le sait";
    $dic = ["consonnes" => 0, "voyelles" => 0];
    $voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $voyelles)) {
            $dic["voyelles"]++;
        } elseif (ctype_alpha($str[$i])) {
            $dic["consonnes"]++;
        }
    }

    echo '<table border="1">
            <thead>
                <tr>
                    <th>Voyelles</th>
                    <th>Consonnes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>' . $dic["voyelles"] . '</td>
                    <td>' . $dic["consonnes"] . '</td>
                </tr>
            </tbody>
          </table>';
    ?>
</body>
</html>




