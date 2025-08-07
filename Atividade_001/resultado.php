<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando Mensagem</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <!-- Título da página -->
     <h1>Resultado:</h1>

    <p>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $valor1 = $_POST["valor1"];
                $valor2 = $_POST["valor2"];
                $operacao = $_POST["opcoes"];

                if ($operacao == "soma") {
                    $resultado = $valor1 + $valor2;
                    $simbolo = "+";
                } else if ($operacao == "subtracao") {
                    $resultado = $valor1 - $valor2;
                    $simbolo = "-";
                }
            }
        ?>
    </p>

    <!-- Link para voltar à página do formulário -->
     <a href="index.php">Voltar</a>
    
</body>
</html>