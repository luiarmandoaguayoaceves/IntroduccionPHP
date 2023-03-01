<?php include 'includes/header.php';

//While

//do While

//for loop
for ($i=1; $i < 1000; $i++) { 
    if ($i % 3 ===0 && $i % 5 === 0) {
        echo $i . "-FIZZ BUZZ </br>";
    }else if ($i % 3 === 0){
        echo $i . "-Fizz </br>";
    }else if ($i % 5 === 0){
        echo $i . "-Buzz </br>";
    }else {
        echo $i . "</br>";
    }
}


include 'includes/footer.php';