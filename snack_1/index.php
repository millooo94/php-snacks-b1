<?php
$arrmatches = [
    [
        [
            "team" => 'Venezia',
            "score" => 82
        ],
        [
            "team" => 'Brescia',
            "score" => 79
        ],
    ],
    [
        [
            "team" => 'Napoli',
            "score" => 69
        ],
        [
            "team" => 'Trento',
            "score" => 58
        ],
    ],
    [
        [
            "team" => 'Derthona',
            "score" => 79
        ],
        [
            "team" => 'Dinamo Sassari',
            "score" => 82
        ],
    ],
    [
        [
            "team" => 'Olimpia Milano',
            "score" => 81
        ],
        [
            "team" => 'Reggiana',
            "score" => 63
        ],
    ],
    [
        [
            "team" => 'VL Pesaro',
            "score" => 101
        ],
        [
            "team" => 'Varese',
            "score" => 93
        ],
    ],
    [
        [
            "team" => 'Universo Treviso',
            "score" => 77
        ],
        [
            "team" => 'Verona',
            "score" => 79
        ],
    ],
    [
        [
            "team" => 'Virtus Bologna',
            "score" => 77
        ],
        [
            "team" => 'Scafati',
            "score" => 84
        ],
    ],
    [
        [
            "team" => 'Trieste',
            "score" => 66
        ],
        [
            "team" => 'Brindisi',
            "score" => 83
        ],
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <ul>
        <?php
for ($match = 0; $match < count($arrmatches); $match++) {
    echo "<li>";
    for ($team = 0; $team < count($arrmatches[$team]); $team++) {
                echo "<div>";
                for ($result = 0; $result < count($arrmatches[$team][$result]); $team++) {
                    
                }
                echo "</div>";
    }
    echo "</li>";
  }
        ?>
    </ul>
    
</body>
</html>