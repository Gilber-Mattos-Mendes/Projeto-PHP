<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
function mostrarTabuada($numero) {
        echo "<h3>Tabuada do $numero</h3>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado <br>";
        }
        
}

if (isset($_POST['entrada']) && $_POST['entrada'] !== "") {
    $numero = (int) $_POST['entrada'];
    echo "<h1>Resultado</h1>";
    mostrarTabuada($numero);
}

echo "<br><a href='../index.php'>Voltar</a>";

?>

</body>
</html>


