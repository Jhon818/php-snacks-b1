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

  ## Snack 2
// Passare come parametri GET name, mail e age e verificare
$name = $_GET['name'];

$mail = $_GET['mail'];

$age = $_GET['age'];

// (cercando i metodi che non conosciamo nella documentazione) che name
// sia più lungo di 3 caratteri,
if (strlen($name) > 3) {
    echo $name;
};
// che mail contenga un punto e una chiocciola e che age sia un numero.
if (strpos($mail, '.@') !== false) {
    echo $mail;
}

if (is_numeric($age)) {
    echo $age;
};

// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
if ($name == true && $mail == true && $age == true) {
   echo 'Accesso riuscito';
}
else {
    echo 'Accesso negato';
}
?>