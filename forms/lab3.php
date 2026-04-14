<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name = "";
$age = "";
$epost = "";

$ageError = "";
$epostError = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $epost = $_POST['epost'];
    if (!str_contains($epost, "@")) {
        $epostError = "Epost must contain '@'.";
    }
    if (!is_numeric($age) || $age < 18) {
        $ageError = "Age must be a number and at least 18.";
    } 
}
?>
    <form method="POST" >
        <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        </div>

        <div>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?php echo $age; ?>">
        <span style="color: red;"><?php echo $ageError; ?></span>
        </div>

        <div>
        <label for="epost">Epost:</label>
        <input type="text" id="epost" name="epost" value="<?php echo $epost; ?>">
        <span style="color: red;"><?php echo $epostError; ?></span>
        </div>


        <input type="submit" value="Spara">
</body>
</html>