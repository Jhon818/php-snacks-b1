<!-- ## Snack 9B
Attraverso un parametro GET da inserire direttamente nell’url (uno alla volta), filtrare gli hotel che hanno un parcheggio, numero minimo di stelle o massima lontananza dal centro.
Se non c’è un filtro, visualizzare come in precedenza tutti gli hotel -->
<?php
require '../snack_9A/snack_9A-database.php';

$name = $_GET['name'];
$description = $_GET['description'];
$parking = $_GET['parking'];
$vote = $_GET['vote'];
$distance_to_center = $_GET['distance_to_center'];



if ($name || $description  || $parking || $vote || $distance_to_center) {
    foreach ($hotels as $key => $hotel) {
        $filteredArray = $hotel;
        // filtrare gli hotel che hanno un parcheggio, numero minimo di stelle o massima lontananza dal centro.
        if ($filteredArray["parking"] && $filteredArray["distance_to_center"] <= 20 && $filteredArray["vote"] >= 2) {
            var_dump($filteredArray["name"]); 
        }
    }
   
}

else {
    foreach ($hotels as $key => $hotel) {
        var_dump($hotel) ;
    }
};

?>