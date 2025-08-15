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


function contarPrimos($numero) {
    
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;



    echo "<br><p>Resultado:</p><br>";
    echo "<p>Números Primos: $numero <br>";
   
}

contarPrimos($numero);
echo "<br><p>Resultado:</p><br>";
echo "<p>Números Primos: $numero <br>";

?>

</body>
</html>


