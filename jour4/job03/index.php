<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Formulaire type post</title>
</head>
<body>
    <h2>Formulaire de contact</h2>
    <form action="index.php" method="post">
        <label for="nom"> nom : </label><br/>
        <input type="text" id="nom" name="nom"><br>
        <label for="prénom">prénom :</label><br/>
        <input type="text" id="prénom" name="prénom"><br/>
        <label for="email">mail : </label><br/>
        <input type="email" id="email" name="email"><br/>
    

        <input type="submit" value="envoyer">

    </form>
</body>
</html>

<?php
if (isset($_POST)) {
    $nombre_arguments = 0;
    foreach ($_POST as $key => $value) {
        if (isset($value)) {
            $nombre_arguments++;
        }
    }
    echo "<p>Nombre d'arguments : " . $nombre_arguments . "</p>";
}
?>
