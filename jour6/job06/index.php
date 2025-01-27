<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style Selector</title>
    <?php
    // Get the selected style from the URL parameters
    $selectedStyle = isset($_GET['style']) ? $_GET['style'] : 'style1';
    ?>
    <link rel="stylesheet" href="<?php echo $selectedStyle; ?>.css" id="selected-style">
</head>
<body>
    <form action="index.php" method="get">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style" onchange="this.form.submit()">
            <option value="style1" <?php if ($selectedStyle == 'style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if ($selectedStyle == 'style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if ($selectedStyle == 'style3') echo 'selected'; ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer</button>
    </form>
</body>
</html>

</html>