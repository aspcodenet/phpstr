<?php

// "ung för useState" - dvs get data som de har skrivit in i formuläret
//echo $_GET['team'] ;




// det finns två modes - antingen "visa"
// eller "spara" data. Vi kollar vilken mode vi är i genom att kolla om det finns data i $_GET


if ($_SERVER['REQUEST_METHOD'] === 'POST') {// TRYCKT PÅ KNAPPEN
    // spara data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $team = $_POST['team'];

    // här kan du spara data i en databas eller i en fil
    // för att hålla det enkelt, så skriver vi ut datan på skärmen
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST§" action="formPost.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age">
        <label for="team">Team:</label>
        <input type="text" id="team" name="team">
        <input type="submit" value="Spara">
    </form>
</body>
</html>