<?php
/*
Challenge Description:
Create a simple PHP script that takes a user's name through a GET request and prints a greeting message to the user. 
If no name is provided, it should print a default greeting message.
Hint:
You can access the parameters passed through a GET request using the $_GET superglobal array. 
Check if the 'name' key exists and is not empty before using it.
Starting Code:
<?php
// Your code here
?>*/
$name = $_GET['name'];
$welcome = false;
$accessDenied = false;

if (isset($name) && !empty($name)) {
    $welcome = true;
} else {
    $accessDenied = true;
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <form action="" method="get">
        <label for="nome">Your Name</label>
        <input type="text" name="name" id="nome">
        <button class="submit">send</button>

        <?php if ($welcome) : ?>
            <p>Benvenuto <?php echo $name ?>!</p>
        <?php endif; ?>
        <?php if ($accessDenied) : ?>
            <p>You can't access here.</p>
        <?php endif; ?>
    </form>
</body>

</html>