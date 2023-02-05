<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Armando',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo '<pre>';
var_dump($cliente);
echo '</pre>';

//Ingresa al array
echo $cliente['nombre'];echo '<br>';
echo $cliente['saldo'];echo '<br>';
//Ingresa al array del array
echo $cliente['informacion']['tipo'];echo '<br>';
echo $cliente['informacion']['disponible'];echo '<br>';

//Agrega codigo al array
$cliente['codigo'] = 20110403;
echo $cliente['codigo'];echo '<br>';
echo '<pre>'; 
var_dump($cliente);
echo '</pre>';




include 'includes/footer.php';