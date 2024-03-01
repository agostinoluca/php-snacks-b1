<?php
/* 
Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
*/
$weather = [

    '01-02-2008' => [
        [
            'Morning' => 'sun',
            'Afternoon' => 'rains',
            'Evening' => 'clear'
        ],
        [
            'Average temperature' => '12°'
        ],
    ],
    '20-10-2015' => [
        [
            'Morning' => 'rains',
            'Afternoon' => 'rains',
            'Evening' => 'rains'
        ],
        [
            'Average temperature' => '5°'
        ],
    ],
    '11-06-2022' => [
        [
            'Morning' => 'sun',
            'Afternoon' => 'sun',
            'Evening' => 'clear'
        ],
        [
            'Average temperature' => '24°'
        ],
    ],
];

foreach ($weather as $date => $infos) {
    echo "Date: $date <br>";
    foreach ($infos as $info) {
        foreach ($info as $time => $condition) {
            echo "<br> $time: $condition<br>";
        };
    };
}
