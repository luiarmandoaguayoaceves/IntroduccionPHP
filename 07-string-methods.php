<?php include 'includes/header.php';

$nombreCliente = "Luis Armando";

//Conocer la extencion de un string
echo strlen($nombreCliente);
echo "<br/>";

var_dump($nombreCliente);
echo "<br/>";

//elimina espacios antes y despues del texto
$texto = trim($nombreCliente);
echo strlen($texto);
echo "<br/>";

//MAYUSCULAS
echo strtoupper($nombreCliente);
echo "<br/>";

//minusculas
echo strtolower($nombreCliente);
echo "<br/>";

$email1 = "correo@correo.com";
$email2 = "Correo@correo.com";
//Calidar tipo de data y valor (convirtiendolo en minusculas)
var_dump(strtolower($email1) === strtolower($email2));
echo "<br/>";

//Remplazar dato
echo str_replace('Luis', 'L', $nombreCliente);
echo "<br/>";

//Buscar dato
echo strpos($nombreCliente, 'Luis');
echo "<br/>";

$tipoCliente = "premium";

//Concatenar
echo 'El Cliente ' . $nombreCliente . ' es ' . $tipoCliente;
echo "<br/>";

echo "El Cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';