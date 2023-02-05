<?php include 'includes/header.php';

$cliente = [];
$cliente1 = array();
$cliente2 = ['Luis', 'pedro', 'pablo'];
$cliente3 = [
    'nombre' => 'Armando',
    'saldo' => 200
];

var_dump(empty($cliente));
var_dump(empty($cliente1));
var_dump(empty($cliente2));
var_dump(empty($cliente3));

echo "<br>";

var_dump(isset($cliente));
var_dump(isset($cliente1));
var_dump(isset($cliente2));
var_dump(isset($cliente3));

echo '<br>';

var_dump(isset($cliente3['nombre']));
var_dump(isset($cliente3['codigo']));

include 'includes/footer.php';