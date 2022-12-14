<?php
$name = isset($_GET['name']) ? $_GET['name'] : '';
$age = isset($_GET['age']) ? $_GET['age'] : '';
$mail = isset($_GET['mail']) ? $_GET['mail'] : '';
$pos_at = strpos($mail, '@');

if(strlen($name) > 3 && $pos_at && strpos($mail, '.', $pos_at) && is_numeric($age)) {
    $message = 'Accesso riuscito';
} else if (empty($name) || empty($age) || empty($mail)) {
    $message = 'Inserisci i tuoi dati';
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
<body style="height: 100vh; background-color: bisque; overflow: hidden;">
    <form style="position: relative; height: 100%; display: flex; justify-content: center; align-items: center" action="" method="get">
        <label style="margin-right: 1rem; margin-left: 1rem; font-weight: bold;" for="name">NAME:</label>
        <input type="text" name="name" id="name">
        <label style="margin-right: 1rem; margin-left: 1rem; font-weight: bold" for="age">AGE:</label>
        <input type="text" name="age" id="age">
        <label style="margin-right: 1rem; margin-left: 1rem; font-weight: bold" for="mail">E-MAIL:</label>
        <input type="text" name="mail" id="mail">
        <button style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);">SUBMIT</button>
    </form>
    <h1 style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%); text-transform: uppercase; color: coral;"><?php echo $message ?></h1>
</body>
</html>