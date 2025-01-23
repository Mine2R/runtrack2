<?php
session_start();


if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']++;
}else {
    $_SESSION['nbvisites'] = 1;
}
if(isset($_POST['reset'])){
    session_destroy();
}
var_dump($_SESSION['nbvisites']);
  

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test session</title>
</head>
   
<body>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites'];?></p>
    <form action="index.php" method="POST">
    <button type="submit" value="reset" name="reset">Reset</button>
    </form>
</body>
</html>