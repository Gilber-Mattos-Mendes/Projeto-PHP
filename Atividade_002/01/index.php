<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>

    <header>
        <h1>Tabuada<h1>
    </header>

    <main>
        <div>
            
            <form id="formulario" method="POST" action="public/processa.php">
                <label>Digite um número:</label><br>
                <input type="number" id="numero" name="entrada" required><br><br>
                <button type="submit" id="BtnMostrar">Mostrar</button>
            </form>

        </div>
    </main>

    
</body>
</html>