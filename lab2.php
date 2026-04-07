<?php
    $tid = "08:12:07";
    $parts = explode(":", $tid);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Time: <?php echo $tid; ?></h2>
    <ul>
        <li>Hour: <?php echo $parts[0]; ?></li>
        <li>Minute: <?php echo $parts[1]; ?></li>
        <li>Second: <?php echo $parts[2]; ?></li>
    </ul>
</body>
</html>