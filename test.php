<?
// tänk inte för mycket på detta
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';

//$dagar = array("Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
$dagar = ["Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $name; ?></h1>

    <h2>Du är <?php echo $age; ?> år gammal</h2>




    <h2>Sätt #1</h2>
    <?php
    if ($age <= 53) {
        echo "<span>Du är fortfarande ung</span>";
    } else {
        echo "<span>Du är jättegammal</span>";
    }
    ?>

    <h2>Sätt #2</h2>
    <?php
    if ($age <= 53) {
    ?>
        <span>Du är fortfarande ung</span>
    <?php
    } else {
    ?>
       <span>Du är jättegammal</span>
    <?php
    }
    ?>


    <h2>Sätt #3</h2>
    <span>
    <?php
    if ($age <= 53) {
        echo "Du är fortfarande ung";
    } else {
        echo "Du är jättegammal";
    }
    ?>
    </span>



    <h2>Sätt #4</h2>
    <?php
    $message = "Du är fortfarande ung";
    if ($age != 53) {
        $message = "Du är jättegammal"; 
    }
        ?>
    <span><?php echo $message; ?></span>
 
    <hr>
    <select>
        <option value="">Välj en dag</option>
        <?php
        // for ($i = 0; $i < count($dagar); $i++) {
        //     echo "<option value='$dagar[$i]'>$dagar[$i]</option>";
        // }

        foreach ($dagar as $dag) {
            echo "<option value='$dag'>$dag</option>";
        }
        ?>
    </select>



</body>
</html>