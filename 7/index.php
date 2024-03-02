<?php
/*
Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

*/

$students = [
    [
        "name" => "Gianluca",
        "lastname" => "Bagante",
        "votes" => [6, 2, 5, 7, 4],
    ],
    [
        "name" => "Giuseppe",
        "lastname" => "Vartuli",
        "votes" => [4, 7, 5, 4, 6],
    ],
    [
        "name" => "Davide",
        "lastname" => "Tumolo",
        "votes" => [7, 2, 5, 2, 4],
    ],
    [
        "name" => "Luca",
        "lastname" => "Agostino",
        "votes" => [5, 3, 2, 5, 6],
    ],
    [
        "name" => "Cristina",
        "lastname" => "Giacobbe",
        "votes" => [4, 6, 3, 2, 6],
    ],

];

foreach ($students as $student) {
    // var_dump($student);
    echo '<div>';
    echo $student['name'] . ' ' . $student['lastname'] . var_dump(array_sum($students[2]["votes"]) / count($students[1]["votes"]));
    echo '</div>';
}

// var_dump(array_sum($students[2]["votes"]) / count($students[2]["votes"]));
