<?php
$partite = [
    [
        "esterna" => 'Chicago Bulls',
        "interna" => 'Miami Heat',
        "punteggioEsterna" => 56, 
        'punteggioInterna' => 60,
    ],
    [
        "esterna" => 'Cleveland Cavaliers',
        "interna" => 'Lakers',
        "punteggioEsterna" => 49, 
        'punteggioInterna' => 49,
    ],
    [
        "esterna" => 'Boston Celtics',
        "interna" => 'Atlanta Hawks',
        "punteggioEsterna" => 50, 
        'punteggioInterna' => 68,
    ],
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<ul>";
    for ($i = 0; $i < count($partite); $i++) {
        echo "<li> {$partite[$i]["interna"]}  -  {$partite[$i]["esterna"]} | {$partite[$i]["punteggioInterna"]}  -  {$partite[$i]["punteggioEsterna"]} </li>";
    }
    ?>
</body>
</html>