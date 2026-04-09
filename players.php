<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Player {
    public $name;
    public $jersey;
    public $team;
    public $id;

    public function __construct($name, $jersey, $team,$id) {
        $this->name = $name;
        $this->jersey = $jersey;
        $this->team = $team;
        $this->id = $id;

    }
};

$players = [
    new Player("LeBron James", 6, "Los Angeles Lakers",1),
    new Player("Stephen Curry", 30, "Golden State Warriors",2),
    new Player("Kevin Durant", 7, "Brooklyn Nets",3),
    new Player("Giannis Antetokounmpo", 34, "Milwaukee Bucks",4),
    new Player("Kawhi Leonard", 2, "Los Angeles Clippers",5)
];

?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Jersey</th>
            <th>Team</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($players as $player) { ?>
            <tr>
                <td><?php echo $player->id; ?></td>
                <td><?php echo $player->name; ?></td>
                <td><?php echo $player->jersey; ?></td>
                <td><?php echo $player->team; ?></td>
            </tr>
        <?php } ?>
    </tbody> 
</table>
</body>
</html>