<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$arrayNumeri = [];

while (count($arrayNumeri) < 15) {

    $number = rand(1, 15);

    if (!in_array($number, $arrayNumeri)) {
        $arrayNumeri[] = $number;
    };
}

foreach ($arrayNumeri as $numeri) {

    echo "<ul><li>$numeri</ul></li>";
}

?>
