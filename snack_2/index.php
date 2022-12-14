<?php
$name = isset($_GET['name']) ? $_GET['name'] : '';
$age = isset($_GET['age']) ? $_GET['age'] : '';
$mail = isset($_GET['mail']) ? $_GET['mail'] : '';

if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['mail'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    $mail = $_GET['mail'];
    $pos_at = strpos($mail, '@');
}

if(strlen($name) > 3 && $pos_at && strpos($mail, '.', $pos_at) && is_numeric($age)) {
    $message = 'Accesso riuscito';
} else {
    $message = 'Accesso negato';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <form action="">
        <label for="name">
            NAME:
        </label>
        <input type="text" id="name">
        <label for="age">
            AGE:
        </label>
        <input type="text" name="number" id="number">
        <label for="mail">
            E-MAIL
        </label>
        <input type="text" name="mail" id="mail">
        <button>SUBMIT</button>
    </form>
    <h1><?php $message ?></h1>  
</body>
</html>