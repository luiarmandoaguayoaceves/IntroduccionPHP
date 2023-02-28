<?php include 'includes/header.php';

$registro = true;
$admin = true;

if ($registro) {
    echo "El usuario si esta registrado";
}else{
    echo "El usuario no esta registrado";
}

echo "</br>";

if ($registro && $admin) {
    echo "El usuario es administrador";
}else{
    echo "Es un ciudadano primedio";
}
echo "</br>";

$cliente = [
    'nombre'=> 'Armando',
    'saldo' => 500,
    'fecha' => '01/01/2018',
    'id' => 1,
    'tipo' => [
        'cuenta' => 'Premium'
    ]
];


//If anidados
if ($cliente['saldo']>100) {
    echo 'El usuario cuenta con saldo ';
    if ($cliente['tipo']['cuenta'] === 'Premium') {
        echo 'y es cuenta premium';
    }
}else{
    echo 'No tiene saldo';
};

echo "</br>";

//Switch
$lenguaje = 'PHP';

switch ($lenguaje) {
    case 'HTML':
        echo "Emmm...";
        break;
    case 'PHP':
        echo "Buena eleccion";
        break;
    case 'JavaScript':
        echo "Excelente eleccion";
        break;
    default:
        echo 'Elije un codigo de programacion';
        break;
}


include 'includes/footer.php';