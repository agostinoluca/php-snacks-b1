<?php
/*
## Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$access = false;

if (strlen($name) < 3) {
    echo "Devi inserire un nome di almeno 3 caratteri";
} elseif (!str_contains($mail, '.') && !str_contains($mail, '@')) {
    echo "Inserisci una mail valida";
} elseif (!is_numeric($age)) {
    echo "Inserisci la tua età con valori validi.";
} else {
    $access = true;
};

// var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>

<body>
    <form action="" method="get">
        <label for="nome">Your Name</label>
        <input type="text" name="name" id="nome">

        <label for="email">Your Mail</label>
        <input type="text" name="mail" id="email">

        <label for="age">Your Age</label>
        <input type="text" name="age" id="age">
        <button type="submit">Send</button>


        <?php if ($access) : ?>
            <p>Benvenuto <?php echo $name ?> nella tua area personale.</p>
        <?php endif; ?>
    </form>

</body>

</html>