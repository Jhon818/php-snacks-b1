 <!-- Snack 9A -->
<!-- Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Avremo un file PHP con il nostro “database” e un file con tutta la logica. -->

<?php 
    require '../snack_9A/snack_9A-database.php';
foreach ($hotels as $key => $value) {
    var_dump($value);
}
?>
