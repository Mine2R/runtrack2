<?php
session_start();

if(isset($_POST['prénom'])){
    if (!isset($_SESSION['prénoms'])){
        $_SESSION['prénoms'] = [];
    }
    $_SESSION['prénoms'][] = $_POST['prénom'];
}
if(isset($_POST['reset'])){
    $_SESSION['prénoms']=[];
}
var_dump($_SESSION['prénoms']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test session prénoms</title>
</head>
<body>
    <form action="" method="POST"><p>Indiquez votre prénom : </p>
        <input type="text" name="prénom"></input>
        <button type="submit" name="submit">Ajouter</button>
    </form>
    <form action="" method="POST">
        <button type="submit" name="submit">Reset</button>
    </form>
    <h2>Liste des prénoms :</h2>
<ul>
    <?php
    if (isset($_SESSION['prénoms'])) {
        foreach ($_SESSION['prénoms'] as $prénom) {
            echo '<li>' . htmlspecialchars($prénom) . '</li>';
        }
    }
    ?>
</ul>

</body>
</html>