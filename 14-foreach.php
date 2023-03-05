<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'TV 40"',
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

foreach ($productos as $producto):?>
<li>
    <p> Nombre producto: <?php echo $producto['nombre'] ?> </p>
    <p> Precio: <?php echo $producto['precio'] ?> </p>
    <p> <?php echo ($producto['disponible']) ? 'Disponible' : 'No disponible'; ?> </p> <!-- Ternario y un if es similar -->
</li>
<?php
endforeach;

include 'includes/footer.php';