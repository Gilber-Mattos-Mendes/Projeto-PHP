<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$frase = $_POST['frase'] ?? '';
$frase = strtolower($frase);

function contarVogal($frase) {
    $a = 0;
    $e = 0;
    $i = 0;
    $o = 0;
    $u = 0; 
    
    
    for ($pos = 0; $pos < strlen($frase); $pos++) {
        $letra = $frase[$pos];

        if ($letra == 'a'){
            $a++;
        } elseif ($letra == 'e') {
            $e++;
        } elseif ($letra == 'i') {
            $i++;
        } elseif ($letra == 'o') {
            $o++;
        } elseif ($letra == 'u') {
            $u++;
        }
    }
    echo "<br><p>Resultado:</p><br>";
    echo "<p>A = $a</p>";
    echo "<p>E = $e</p>";
    echo "<p>I = $i</p>";
    echo "<p>O = $o</p>";
    echo "<p>U = $u</p>";
}

contarVogal($frase);


?>

</body>
</html>


