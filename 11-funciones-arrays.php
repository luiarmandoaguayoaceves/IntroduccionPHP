<?php include 'includes/header.php';

$productos = ['tablet', 'celular', 'audifonos'];

//Buscar valor en un array
var_dump(in_array('tablet', $productos));
var_dump(in_array('smartwatch', $productos));

$valores = [3,4,2,8,9,6,1,5,7];
//Ordenar de menor a mayor
sort($valores);

echo '<pre>';
var_dump($valores);
echo '</pre>';

//Ordenar de mayor a menor
rsort($valores);

echo '<pre>';
var_dump($valores);
echo '</pre>';

//Arreglo asociativo
$clientes = [
    'nombre' => 'Armando',
    'codigo' => 25,
    'tipo' => 'premium'
];

echo "<br>";

asort($clientes);//Ordenar valor de A a Z
arsort($clientes);//Ordenar valor de Z a A
ksort($clientes);//Ordenar llave de A a Z
krsort($clientes);//Ordenar llave de Z a A
echo '<pre>';
var_dump($clientes);
echo '</pre>';

echo "<br>";


include 'includes/footer.php';