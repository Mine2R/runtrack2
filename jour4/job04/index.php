<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Formulaire type post</title>
</head>
<form method="post" action="">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="email">Email :</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Envoyer">
</form>

</body>
</html>
</body>
</html>
<?php
if (isset($_POST)) {
    foreach ($_POST as $key => $value) {
        echo " <table width='20%' border='1'>
  <tr>
    <th>$key</th>
  </tr>
  <tr>
    <td>$value</td>
  </tr>
</table>";
    }
}
?>