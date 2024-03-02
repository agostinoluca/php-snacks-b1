<?php /*// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */
$randomNumbers = [];
// $min = 1;
// $max = 100;



// function randomNumberGenerate($min, $max, $randomNumbers)
// {
//     $number = rand($min, $max);
//     while (in_array($number, $randomNumbers)) {
//         $number = rand($min, $max);
//     };
//     return $number;
// };

// while (count($randomNumbers) < 15) {
//     $randomNumber = randomNumberGenerate($min, $max, $randomNumbers);
//     $randomNumbers[] = $randomNumber;
// };

// foreach ($randomNumbers as $number) {
//     echo $number . "<br>";
// };


// correzione
while (count($randomNumbers) < 15) {
    $randomNumber = rand(1, 100);

    if (!in_array($randomNumber, $randomNumbers)) {
        // $randomNumbers[] = $randomNumber;
        array_push($randomNumbers, $randomNumber);
    };
};

var_dump($randomNumbers);
