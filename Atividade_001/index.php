<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Calculadora: Operadores Aritiméticos</h1>
    </header>

    <main>
        <div class="caixa">
            <form id="formulario" method="POST" action="resultado.php">
                <label>Digite um número:</label><br>
                <input type="number" id="numero1" name="valor1" required><br><br>

                <label>Digite um número:</label><br>
                <input type="number" id="numero2" name="valor2" required><br><br>

                <label for="filtro">Escolha o operador:</label><br>
                <select id="opcoes" name="opcoes">
                    <option value="Selecione">--Selecione--</option>
                    <option value="soma">Soma(+)</option>
                    <option value="subtracao">Subtração(-)</option>
                    <option value="multiplicacao">Multiplicação(x)</option>
                    <option value="divisao">Divisão(÷)</option>
                </select><br><br>

                <button type="submit" id="BtnCalcular">Calcular</button>
            </form>
        </div>
    </main>

    <!-- Link para o JavaScript externo -->
    <script src="js/script.js"></script>

</body>
</html>