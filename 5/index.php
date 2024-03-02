<?php
/*
Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/

$paragraph = "Nel cuore della città, le luci al neon risplendevano tra le vie strette, creando un'atmosfera vibrante e frenetica. Le persone si affollavano lungo i marciapiedi, ciascuna immersa nei propri pensieri e obiettivi. I suoni della città - il frastuono del traffico, le risate dei passanti, il lontano ronzio delle conversazioni - si fondevano in un crescendo costante, come una sinfonia urbana che non conosceva mai una vera pausa. Tra i grattacieli che si protendevano verso il cielo, c'era un senso di energia palpabile, di possibilità infinite che fluttuavano nell'aria. Era un luogo di contrasti, dove la bellezza e il caos si mescolavano in un caleidoscopio di esperienze e emozioni.";

$explodedParagraphs = explode('.', $paragraph);

var_dump($explodedParagraphs);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraphs</title>
</head>

<body>

    <?php foreach ($explodedParagraphs as $sentence) : ?>
        <p><?= $sentence //altro modo per scrivere echo <?= 
            ?></p>
        <?php endforeach; ?>;

</body>

</html>