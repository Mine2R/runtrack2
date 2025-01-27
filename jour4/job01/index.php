<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Formulaire type get</title>
</head>
<body>
    <h2>Formulaire de contact</h2>
    <form action="index.php" method="get">
        <label for="nom"> nom et prénom : </label><br/>
        <input type="text" id="nom _et_prénom" name="nom_et_prénom"><br>

        <label for="adresse">adresse :</label><br/>
        <input type="text" id="adresse" name="adresse"><br/>

        <label for="code_postal">code postal :</label><br/>
        <input type="text" id="code_postal" name="code_postal"><br/>

        <label for="ville">ville :</label><br/>
        <input type="text" id="ville" name="ville"><br/>

        <label for="email">mail : </label><br/>
        <input type="email" id="email" name="email"><br/>

        <input type="submit" value="envoyer">

    </form>
</body>
</html>

<?php
if (isset($_GET)) {
    $nombre_arguments = 0;
    foreach ($_GET as $key => $value) {
        if (isset($value)) {
            $nombre_arguments++;
        }
    }
    echo "<p>Nombre d'arguments : " . $nombre_arguments . "</p>";
}
?>
<!-- // <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nombre_arguments = count($_POST);
//     echo "<p>Nombre d'arguments POST : " . $nombre_arguments . "</p>";
// }
// ?> -->

