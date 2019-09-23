<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 23/09/2019
 * Time: 11:53
 */

$voedsol = ["aard", "aardbei", "melk" , "yog"];
$boodschaappen = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];

foreach ($boodschaappen as $boodschap) {
    echo "<li>$boodschap</li>";


}

for ($i = 1; $i <= 4; $i++ ) {
    echo "<img src='img/voedsol$i.jpg'>";
}