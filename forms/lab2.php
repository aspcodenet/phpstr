<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$tal1 = "";
$tal2 = "";
$operator = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Har dom tryckt på knappen?
    $tal1 = $_POST['tal1'];
    $tal2 = $_POST['tal2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '+':
            $result = $tal1 + $tal2;
            break;
        case '-':
            $result = $tal1 - $tal2;
            break;
        case '*':
            $result = $tal1 * $tal2;
            break;
        case '/':
            if ($tal2 != 0) {
                $result = $tal1 / $tal2;
            } else {
                $result = "Kan inte dela med noll!";
            }
            break;
        default:
            $result = "Ogiltig operator!";
    }

    echo "Resultatet är: " . $result;
}
?>
    <form method="post">
        <label for="tal1">Tal1:</label>
        <input type="text" name="tal1" value="<?php echo $tal1; ?>">
        <label for="tal2">Tal2:</label>
        <input type="text" name="tal2" value="<?php echo $tal2; ?>">
        <label for="operator">Operator:</label>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    

        <input type="submit" value="Spara">
    </form>
</body>
</html>