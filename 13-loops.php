<?php include 'includes/header.php';
                                        /* Se puede usar las llaver para teminar ordenes pero tambien
                                         se puede usar la palabra end seguido del tipo de instruccion
                                          por ejemplo if(): endif, for(): endfor, while: endwhile*/ 
//While
$i = 0;
// while($i < 10) {
//     echo $i . "</br>";
    
//     $i++;
// }
// //do While

// do {
//     echo $i . "</br>";
// } while ($i <br 10);

// //for loop
// for ($i = 1; $i <1000; $i++):
//     if ($i % 3 === 0 && $i % 5 === 0) :
//         echo $i . "-FIZZ BUZZ </br>";
//     elseif ($i % 3 === 0) :
//         echo $i . "-Fizz </br>";
//     elseif ($i % 5 === 0) :
//         echo $i . "-Buzz </br>";
//     else :
//         echo $i . "</br>";
//     endif;
// endfor;

// For Each
$clientes = array('pedro', 'Juan', 'Karen');
foreach($clientes as $cliente) :
    echo $cliente . "</br>";
endforeach;

// echo count($clientes)."</br>";
// echo sizeof($clientes);

for ($i = 0; $i < count($clientes); $i++):
    echo $clientes[$i]."</br>";
endfor;

$cliente = [
    'nombre' => 'juan',
    'saldo' => 200,
    'tipo' => 'premium'
];

foreach ($cliente as $key => $valor):
    echo $key . " - ",$valor . "</br>";
endforeach;

include 'includes/footer.php';