<?php
    $games = [
        [
            "Squadra1" ,
            "Squadra2",
            20,
            40
        ],
        [
            "Squadra3" ,
            "Squadra4",
            20,
            40
        ],
        [
            "Squadra5" ,
            "Squadra6",
            20,
            40
        ],
        [
            "Squadra7" ,
            "Squadra8",
            20,
            40
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <?php 
        for ($i = 0; $i<count($games); $i++) { ?>
            <p>
                <span><?php echo array_values($games)[$i][0] ?></span>
                <span>-</span>
                <span><?php echo array_values($games)[$i][1] ?></span>
                <span>|</span>
                <span><?php echo array_values($games)[$i][2] ?></span>
                <span>-</span>
                <span><?php echo array_values($games)[$i][3] ?></span>
            </p>
    <?php
        };
    ?>
</body>
</html>
