<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$numero = $_POST['numero'] ?? '';


function truePrimo($numero) {
    
    if ($numero < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

function contarPrimos($numero) {
    $primos = [];
    for ($num = 2; $num <= $numero; $num++) {
        if ((truePrimo($num))) {
            $primos[] = $num;
        }
    }
    return $primos;
}

$primos = contarPrimos($numero);

    echo "<br><p>Resultado:</p><br>";
    echo "<p>Números Primos até: $numero <br>";
    echo "<p>" . implode(",", $primos) . "</p>";
   
?>

<br><a href="../index.php">Voltar</a>

</body>
</html>


