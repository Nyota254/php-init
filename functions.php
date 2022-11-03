<?php

$title = "functions";

function sum($num1,$num2){

    $result = $num1 + $num2;

    return $result;
}

$favouriteGuitars = [
    'Vela',
    'Explorer',
    'Strat'
];

function formart_array($_array){
    echo '<pre>'; 
    print_r($_array);
    echo '</pre>';
}

$result = sum(1,2);

$formarted_array = formart_array($favouriteGuitars)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?> </title>
</head>
<body>

    <?= $formarted_array ?>
    
</body>
</html>