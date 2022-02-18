<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

if (strlen($name) < 3 ) {
    echo 'Il nome deve essere più lungo di 3 caratteri';
} else {
    echo 'Il nome è valido';
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
    <div>
        <?php

        ?>
    </div>
</body>
</html>