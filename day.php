<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

echo date("l"); // ger ut veckodagen på engelska
echo "<br>";

echo date("w"); // ger ut veckodagen mellan 0 (söndag) och 6 (lördag)
echo "<br>";


 function getDay() {
   $weekDay = date("w"); 
   $days = ["Söndag", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag"];
   return $days[$weekDay];

//    switch ($weekDay) {
//     case 0:
//         return "Söndag";
//     case 1:
//         return "Måndag";
//     case 2:
//         return "Tisdag";
//     case 3:
//         return "Onsdag";
//     case 4:
//         return "Torsdag";
//     case 5:
//         return "Fredag";
//     case 6:
//         return "Lördag";
//    }

//    if ($weekDay == 0) {
//        return "Söndag";
//    } else if ($weekDay == 1) {
//        return "Måndag";
//    } else if ($weekDay == 2) {
//        return "Tisdag";
//    } else if ($weekDay == 3) {
//        return "Onsdag";
//    } else if ($weekDay == 4) {
//        return "Torsdag";
//    } else if ($weekDay == 5) {
//        return "Fredag";
//    } else if ($weekDay == 6) {
//        return "Lördag";
//    }

 };
 ?>
<body>
    <h1>Vilken dag är det idag?</h1>
    <span><?php echo getDay(); ?></span>

</body>
</html>