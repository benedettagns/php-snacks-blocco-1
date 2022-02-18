<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

//validità nome
if (strlen($name) < 3 ) {
    echo 'Il nome deve essere più lungo di 3 caratteri'.'<br/>';
} else {
    echo 'Il nome è valido'.'<br/>';
};

//validità email
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'L\'email è valida'.'<br>';
}
else {
    echo 'L\'email non è valida'.'<br>';
}

//validità età
if(filter_var($age, FILTER_VALIDATE_INT)) {
    echo 'L\'età è valida'.'<br/>';
} else {
    echo 'L\'età non è valida'.'<br/>';
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