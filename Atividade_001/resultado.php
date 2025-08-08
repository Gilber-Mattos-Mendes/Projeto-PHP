<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando Mensagem</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <header>
        <h1>Resultado da Operação:</h1>
    </header>

    <main>
        <p class="caixa">
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
                    } else if ($operacao == "divisao") {
                        if ($valor2 != 0) {
                            $resultado = $valor1 / $valor2;
                            $simbolo = "÷";
                        } else {
                            $resultado = "Erro: Divisão por zero não é permitida.";
                        }
                    } else if ($operacao == "multiplicacao") {
                        $resultado = $valor1 * $valor2;
                        $simbolo = "x";
                    } else {
                        $resultado = "Operação Inválida";
                    }
                }

                echo "O resultado de <strong>$valor1 $simbolo $valor2 = $resultado </strong> "; 
            ?>

            <a href="index.php">Fazer outro cálculo</a>
        </p class="caixa">
    </main>
     
    
</body>
</html>