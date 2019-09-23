
<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 23/09/2019
 * Time: 09:27
 */

$voedsol = ["aard", "aardbei", "melk" , "yog"];
$boodschaappen = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];
$name = $_POST['product'];
array_push($boodschaappen, $name);

foreach ($boodschaappen as $boodschap) {
    echo "<li>$boodschap</li>";
}

for ($i = 1; $i <= 4; $i++ ) {
    echo "<img src='img/voedsol$i.jpg'>";
}