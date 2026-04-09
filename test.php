<?php
require_once "components/header.php"; // MOTSVARAR import

// tänk inte för mycket på detta
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';

//$dagar = array("Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
$dagar = ["Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag"];


function square($number) {
  return $number * $number;
}


class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    
}

// På riktigt = vi hämtar personer från en databas
$person = new Person("Stefan", 11);
$person->age = 54;
$person2 = new Person("Anna", 13);
$person3 = new Person("Oliver", 17);

$persons = [$person, $person2, $person3];
// $persons kommer från databasen






?>
<?php headerComponent(); ?>

<body>
    <ul>
        <li><?php echo $person->name . " är " . $person->age . " år gammal"; ?></li>
        <li><?php echo $person2->name . " är " . $person2->age . " år gammal"; ?></li>
        <li><?php echo $person3->name . " är " . $person3->age . " år gammal"; ?></li>
    </ul>
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
    <hr>
    <?php
    $number = 12;
    echo $number + 10; // 22
    echo "<hr>";


    $number = "12";
    echo $number + "10"; // 22
    echo "<hr>";
    echo $number + "10" . "12"; // 2212

    $first = "Stefan";
    $last = "Svensson";
    echo $first . " " . $last; // Stefan Svensson


    //  $person->isYoung() ? "Yes" : "No"; 
    $age = 12;
    $m = "";
    
    if($age >12) {
       $m = "Du är äldre än 12 år";
    } else {
        $m = "Du är barn";
    }

    $m = $age > 12 ? "Du är äldre än 12 år" : "Du är barn";


    ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Is Young?</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persons as $person){
                $className = "";
                if($person->age > 53) {
                    $className = "reallyold";
                }
                $isYoung = "No";
                if ($person->age <= 53) {
                    $isYoung = "Yes";
                }
                 ?>
                <tr>
                    <td class="<?php echo $className; ?>"><?php echo $person->name; ?></td>
                    <td><?php echo $person->age; ?></td>
                    <!-- <td><?php echo $person->age <= 53 ? "Yes" : "No"; ?></td>-->
                    <td><?php echo $isYoung; ?></td> 
                </tr>
            <?php } ?>
        </tbody>
    </table>


</body>
</html>