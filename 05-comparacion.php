<?php include 'includes/header.php';


$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br/>";

var_dump($numero1 < $numero2);
echo "<br/>";

var_dump($numero1 >= $numero2);
echo "<br/>";

var_dump($numero1 <= $numero2);
echo "<br/>";

var_dump($numero3 == $numero2);
echo "<br/>";

var_dump($numero3 == $numero4);
echo "<br/>";

var_dump($numero3 === $numero4);
echo "<br/>";

//Si derecha es mayor valor es -1
var_dump($numero1 <=> $numero2);
echo "<br/>";


//Si valor es igual es 0
var_dump($numero2 <=> $numero1);
echo "<br/>";

//Si valor izquierda es mayor resultado es 1
var_dump($numero3 <=> $numero2);
echo "<br/>";

include 'includes/footer.php';