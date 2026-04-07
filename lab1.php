<?php
    $texten = "hej hej jag heter Stefan vad heter du?";

    $upperCase = strtoupper($texten);
    $lowerCase = strtolower($texten);
    $uc1 = ucfirst($texten);
    $uc2 = ucwords($texten);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Back to Home</a>
    <h2>Original:<?php echo $texten;?></h2>
    <h2>Uppercase: <?php echo $upperCase;?></h2>
    <h2>Lowercase: <?php echo $lowerCase;?></h2>
    <h2>ucfirst: <?php echo $uc1;?></h2>
    <h2>ucwords: <?php echo $uc2;?></h2>
</body>
</html>