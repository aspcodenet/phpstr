<?php
$swedishWeekDays =  ["Söndag", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag"];
$weekDay = date("w"); // 0-6 där 0 är söndag och 6 är lördag
$daynameOfToday = $swedishWeekDays[$weekDay];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .active {
            color: green;
        }
     </style>
</head>
<body>
    <ul>
        <?php foreach ($swedishWeekDays as $dayname) {
            $className = "";
            if ($dayname == $daynameOfToday) {
                $className = "active";
            }
             ?>
            <li class="<?php echo $className; ?>"><?php echo $dayname; ?></li>
        <?php } ?>     
    </ul>
</body>
</html>