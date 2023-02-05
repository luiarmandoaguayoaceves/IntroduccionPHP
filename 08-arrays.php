<?php include 'includes/header.php';

$productos = ['Telefono', 'Laptop', 'Tablet'];

//Aprender para ver mejor los arreglos es una etiqueta de HTML
echo "<pre>";
var_dump($productos);
echo "</pre>";

//Agregar elemento al indicador 3
$productos[3] = 'Television';

echo $productos[3];

echo "<pre>";
var_dump($productos);
echo "</pre>";

//Agregar al final del arreglo
array_push($productos, 'Smartwatch');

echo "<pre>";
var_dump($productos);
echo "</pre>";

//Agregar al Inicio
array_unshift($productos, 'Bocina');
echo "<pre>";
var_dump($productos);
echo "</pre>";

//Arreglo tambien
$clientes = array('Armando', 'Felipe', 'Omar');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];

include 'includes/footer.php';