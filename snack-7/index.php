<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$alunni = [
    [
        "nome" => "Cristiano",
        "cognome" => "Altomonte",

        "voti" => [
            "matematica" => "8",
            "italiano" => "7",
            "inglese" => "6",
        ]
    ],
    [

        "nome" => "Giovanni",
        "cognome" => "Rossi",

        "voti" => [
            "matematica" => "2",
            "italiano" => "5",
            "inglese" => "5",
        ]
    ],
    [

        "nome" => "Andrea",
        "cognome" => "Amato",

        "voti" => [
            "matematica" => "4",
            "italiano" => "6",
            "inglese" => "3",
        ]
    ],
];



foreach ($alunni as $value) {

    echo $value['nome'] . ' ';
    echo $value['cognome'] . '<br>';
        
    echo array_sum($value['voti']) / count($value['voti']) . '<br>';     

}

?>


