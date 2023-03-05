<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'TV 40',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Celular',
        'precio' => 400,
        'disponible' => true
    ],
    [
        'nombre' => 'Tablet',
        'precio' => 100,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);
$json = json_encode($productos);
$json_array = json_decode($json);
var_dump($json);
var_dump($json_array);
echo "</pre>";



include 'includes/footer.php';