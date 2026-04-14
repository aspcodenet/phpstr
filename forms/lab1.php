<?php
echo "Hello World!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lab 1</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['namn'];
    echo "Hello, " .$name . "!";
}else{
?>
     <!-- METHOD - GET eller POST -->
        <!-- ACTION - vart ska datan skickas  
         om tom = skickas till samma sida
         -->
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="namn">

        <input type="submit" value="Spara">
    </form> 
<?php
}
?>  
</body>
</html>
