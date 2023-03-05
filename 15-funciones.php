<?php 
declare(strict_types=1);//obliga a poner a fuersa int's
include 'includes/header.php';

function sumar(int $num1 = 0, int $num2 = 0){
    echo $num1+$num2;
}

sumar(10);
echo "</br>";
sumar(10,15);
echo "</br>";
//Error sumar(10,'hola');



include 'includes/footer.php';