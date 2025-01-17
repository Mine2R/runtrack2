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
        <label for="nom"> nom : </label><br/>
        <input type="text" id="nom" name="nom"><br>
        <label for="email">mail : </label><br/>
        <input type="email" id="email" name="email"><br/>

        <input type="submit" value="envoyer">

    </form>
    




</body>
</html>

<?php
if (isset($_post)){
    foreach ($_post as $key => $value){
    echo " <table width='20%' border='1'>
  <tr>
    <th> $key</th>
  </tr>
  <tr>
    <td> $value </td>
  </tr>
</table>";
    }
}
?>