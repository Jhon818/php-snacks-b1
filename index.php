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
} else {
    echo 'Accesso negato';
}
?>


<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore
un array di post associati a quella data. Stampare ogni data con i relativi post. -->
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];



foreach ($posts as $key => $dates) {
    foreach ($dates as $post) {
        echo $key . var_dump($post);
    }
}
?>

<!-- 
Snack 4
Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$randomNum = [];


while (count($randomNum) < 15) {
    $newNum = rand(1, 100);
    if (!in_array($newNum, $randomNum)) {
        $randomNum[] = $newNum;
    }
}

var_dump($randomNum);
?>
<!-- 
## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi.  -->
<?php
$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptates! Impedit nam non autem quo. Excepturi ut quo inventore mollitia at nam facere voluptates animi, aliquam, obcaecati officiis dolor nemo?';
// Ogni punto un nuovo paragrafo.
$paragraph =   explode('.', $paragraph);
var_dump($paragraph);
?>


<!-- SNACK6:
Utilizzare questo array: https://pastebin.com/CkX3680A. Includerlo in un file database.php... Stampiamo poi il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde -->
<?php
include __DIR__ . '/database.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
</head>

<body>
    <div class="teachers">
        <?php
       foreach ($db['teachers'] as $key => $rule) {
        var_dump($rule);
    }
        ?>
    </div>
    <div class="pm">
        <?php
        foreach ($db['pm'] as $key => $rule) {
            var_dump($rule);
        }
        
        ?>
    </div>

    <style>
        div.teachers {
            background-color: grey;
            display: inline-block;
        }

        div.pm {
            background-color: green;
            display: inline-block;
        }
    </style>
</body>

</html>