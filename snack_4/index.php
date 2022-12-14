<?php
$arrNumbers = [];
do {
    $number = rand(1, 50);
    if (!in_array($number, $arrNumbers)) {
        $arrNumbers[] = $number;
    }
} while (count($arrNumbers) < 15);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body style="height: 100vh; background-color: black; overflow: hidden; display: flex; justify-content: center; align-items: center">
    <ul style="color: white; list-style: none;">
        <?php
        for ($i = 0; $i < count($arrNumbers); $i++) {
        echo "<li style='margin-bottom: 1rem; font-weight: bold'>".$arrNumbers[$i]."</li>";
    }
        ?>
    </ul>  
</body>
</html>