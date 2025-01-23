<?php
if(isset($_COOKIE['nbvisites'])){
     $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
     $nbvisites = 1;
}
if(isset($_POST['reset'])){
    setcookie('nbvisites', 0, time() + (3600),);
    $nbvisites = 0;
} else {
    setcookie('nbvisites', $nbvisites, time() + (3600),);
}
var_dump($_COOKIE);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Cookie</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>
    <form action="" method="POST">
    <button type="submit" value="reset" name="reset">Reset</button>
    </form>
</body>

</html>