<!DOCTYPE html>
<html>
<head>
    <title>Registro e Busca de Medicamentos</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h1>Registro de Medicamentos</h1>
    <form action="registrar.php" method="POST">
        <label for="medicamento">Medicamento:</label>
        <input type="text" name="medicamento" required><br>

        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" required><br>

        <label for="vencimento">Data de Vencimento:</label>
        <input type="date" name="vencimento" required><br>

        <input type="submit" value="Registrar Medicamento">
    </form>

    <h1>Buscar Medicamentos</h1>
    <form action="buscar.php" method="POST">
        <label for="buscar_medicamento">Nome do Medicamento:</label>
        <input type="text" name="buscar_medicamento"><br>

        <input type="submit" value="Buscar Medicamento">
    </form>


</body>
</html>
