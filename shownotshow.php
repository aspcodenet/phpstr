<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$hour = date("H");
$isDay = false;
if ($hour >= 6 && $hour < 18) {
    $isDay = true;
}
?>
<body>
<?php if ($isDay) { ?>

    <div>
        <h1>Nu är det dag</h1>
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZGF5fGVufDB8fDB8fHww&w=1000&q=80" alt="day">
    </div>
<?php } else { ?>
    <div>
        <h1>Nu är det natt</h1>
        <img src="https://unsplash.com/photos/milky-way-over-the-light-from-the-city-in-the-distance-the-vast-cosmos-and-reflections-on-the-universe-and-our-place-in-it-rUcaOseMXUY" alt="night">
    </div>
<?php } ?>
</body>
</html>