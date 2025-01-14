<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables et tableau HTML</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php

$boolVar = true;
$intVar = 42;
$stringVar = "Bonjour, monde !";
$floatVar = 3.14;


$variables = [
    ["type" => "boolean", "name" => "boolVar", "value" => $boolVar ? "true" : "false"],
    ["type" => "integer", "name" => "intVar", "value" => $intVar],
    ["type" => "string", "name" => "stringVar", "value" => $stringVar],
    ["type" => "float", "name" => "floatVar", "value" => $floatVar],
];

echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Type</th>';
echo '<th>Nom</th>';
echo '<th>Valeur</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';


foreach ($variables as $var) {
    echo '<tr>';
    echo '<td>' . $var["type"] . '</td>';
    echo '<td>' . $var["name"] . '</td>';
    echo '<td>' . $var["value"] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>

</body>
</html>
