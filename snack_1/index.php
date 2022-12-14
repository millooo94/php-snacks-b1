<?php
$arrmatches = [
    [
        [
            "team_a" => 'Venezia',
            "score_a" => 82,
            "team_b" => 'Brescia',
            "score_b" => 79
        ],
    ],
    [
        [
            "team_a" => 'Napoli',
            "score_a" => 69,
            "team_b" => 'Trento',
            "score_b" => 58
        ],
    ],
    [
        [
            "team_a" => 'Derthona',
            "score_a" => 79,
            "team_b" => 'Dinamo Sassari',
            "score_b" => 82
        ],
    ],
    [
        [
            "team_a" => 'Olimpia Milano',
            "score_a" => 81,
            "team_b" => 'Reggiana',
            "score_b" => 63
        ],
    ],
    [
        [
            "team_a" => 'VL Pesaro',
            "score_a" => 101,
            "team_b" => 'Varese',
            "score_b" => 93
        ],
    ],
    [
        [
            "team_a" => 'Universo Treviso',
            "score_a" => 77,
            "team_b" => 'Verona',
            "score_b" => 79
        ],
    ],
    [
        [
            "team_a" => 'Virtus Bologna',
            "score_a" => 77,
            "team_b" => 'Scafati',
            "score_b" => 84
        ],
    ],
    [
        [
            "team_a" => 'Trieste',
            "score_a" => 66,
            "team_b" => 'Brindisi',
            "score_b" => 83
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
<body style="height: 100vh; background-color: black; overflow: hidden; display: flex; justify-content: center; align-items: center">
    <ul style="list-style: none;">
    <?php
for ($match_i = 0; $match_i < count($arrmatches); $match_i++) {
    echo "<li style='margin-bottom: 2rem; font-weight: bold; color: chocolate'>";
    for ($team_i = 0; $team_i < count($arrmatches[$match_i]); $team_i++) {
        echo $arrmatches[$match_i][$team_i]['team_a'] . " - ". $arrmatches[$match_i][$team_i]['team_b'] . " | " . $arrmatches[$match_i][$team_i]['score_a'] . "-". $arrmatches[$match_i][$team_i]['score_b'];
    }
    echo "</li>";
  }
        ?>
    </ul>
    
</body>
</html>