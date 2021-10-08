<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa
del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
// array con partite di basket

$teams = [
    //arrays con squadre e punteggi 
    [
        "squadraCasa" => "Olimpia Milano",
        "squadraOspite" => "Cantù",
        "puntiCasa" => 55,
        "puntiOspite" => 60
    ],
    [
        "squadraCasa" => "squadra2",
        "squadraOspite" => "squadra2",
        "puntiCasa" => 55,
        "puntiOspite" => 60
    ],
    [
        "squadraCasa" => "squadra3",
        "squadraOspite" => "squadra3",
        "puntiCasa" => 55,
        "puntiOspite" => 60
    ]
    ];
    // Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60 -->
foreach ($teams as $item) {
    echo $item['squadraCasa'] . " " . $item['squadraOspite'] . ' ' . "|" . ' ' . $item['puntiCasa'] . '-' . $item['puntiOspite'] . '<br>';
  }

?>