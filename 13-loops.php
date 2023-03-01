<?php include 'includes/header.php';

//While
$i = 0;
while($i < 10) {
    echo $i . "</br>";
    
    $i++;
}
//do While

do {
    echo $i . "</br>";
} while ($i < 10);

//for loop
for ($i = 1; $i < 1000; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . "-FIZZ BUZZ </br>";
    } else if ($i % 3 === 0) {
        echo $i . "-Fizz </br>";
    } else if ($i % 5 === 0) {
        echo $i . "-Buzz </br>";
    } else {
        echo $i . "</br>";
    }
}


include 'includes/footer.php';
