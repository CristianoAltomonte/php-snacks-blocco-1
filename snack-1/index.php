<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <?php
    $partite = [
        [
            'squadracasa' => 'Milano',
            'squadraospite' => 'Cantu',
            'punticasa' => 55,
            'puntiospite' => 60,
        ],
        [
            'squadracasa' => 'Genova',
            'squadraospite' => 'Viola',
            'punticasa' => 70,
            'puntiospite' => 80,
        ],
        [
            'squadracasa' => 'Treviso',
            'squadraospite' => 'Palermo',
            'punticasa' => 70,
            'puntiospite' => 80,
        ]
    ];

    for ($i = 0; $i < count($partite); $i++) {
        echo $partite[$i]['squadracasa'] . ' - ' . $partite[$i]['squadraospite'] . ' | ' . $partite[$i]['punticasa'] . '-' . $partite[$i]['puntiospite'];
    };
    ?>
</body>

</html>