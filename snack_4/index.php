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
<body>
    <ul>
        <?php
        for ($i = 0; $i < count($arrNumbers); $i++) {
        echo "<li>".$arrNumbers[$i]."</li>";
    }
        ?>
    </ul>  
</body>
</html>