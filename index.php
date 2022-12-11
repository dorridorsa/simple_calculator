<?php

$error = "";
$x = "";
$y = "";
$result = "";

if(isset($_GET['operatio'])){
    $x = $_GET['num1'];
    $y = $_GET['num2'];
    $op = $_GET['operation'];

    if(is_numeric($x) && is_numeric($y)){

    
    switch($op){
        case 'Add' : $result = $x + $y;
        break;

        case 'Sub' : $result = $x - $y;
        break;

        case 'Pro' : $result = $x * $y;
        break;

        case 'Div' : $result = $x / $y;
        break;
    }else{
        $error = "Skriv in nummret först";
    }
    }



}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkel miniräknare med PHP </title>
</head>
<body>

<h1><?= $error ?></h1>
    <form action="<? $_SERVER['PHP_SELF']?>" method="get">
    <div>
        <lable for="num1"> Nummer 1 </lable>
        <input type="nummer" name="num1" id="num1" value="<?= $x ?>">
</div>

<div>
        <lable for="num2"> Nummer 2 </lable>
        <input type="nummer" name="num2" id="num2" value="<?= $y ?>">
</div>


<div>
        <lable for="result"> Resultat </lable>
        <input type="nummer" id="result" value="<?= $result ?>" disabled>
</div>

<div>
        <input type="submit" value="Add" name="operation">
        <input type="submit" value="Sub" name="operation">
        <input type="submit" value="Pro" name="operation">
        <input type="submit" value="Div" name="operation">
</div>

</form>
</body>
</html>