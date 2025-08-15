<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média do Aluno</title>
    <link rel="stylesheet" href="public/css/estilo.css">

</head>
<body>

    <header>
        <h1>Situação do Aluno</h1>
    </header>

    <main>
        <h2>Consultar Médio do Aluno</h2>

        <div>
            <form id="formulario" method="POST" action="public/processa.php">
                <label>Digite o Nome do Aluno:</label><br>
                <input type="text" id="nome" name="nome_aluno" required><br><br>

                <label>Digite a 1ª Nota:</label><br>
                <input type="number" id="nota1" name="nota1" required><br><br>
                <label>Digite a 2ª Nota:</label><br>
                <input type="number" id="nota2" name="nota2" required><br><br>
                <label>Digite a 3ª Nota:</label><br>
                <input type="number" id="nota3" name="nota3" required><br><br>
                <label>Digite a 4ª Nota:</label><br>
                <input type="number" id="nota4" name="nota4" required><br><br>

                <button type="submit" id="BtnConsultar">Consultar</button>
            </form>
        </div>
        
    </main>
    
</body>
</html>