<?php

$numeriNecessari = 15;
$arrayRandom = [];

while (count($arrayRandom) < $numeriNecessari) {
    $random = rand(1,100);
    echo "<p>" . $random . "</p>";

    if(!in_array($random, $arrayRandom)) {
        $arrayRandom[] = $random;
    };
};

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
    
</body>
</html>