<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "medicamentos_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buscar_medicamento = $_POST['buscar_medicamento'];

    // Consulta SQL para buscar medicamentos pelo nome
    $sql = "SELECT * FROM medicamentos WHERE medicamento LIKE '%$buscar_medicamento%'";

    $result = $conn->query($sql);

    
     if ($result->num_rows > 0) {
        echo "<h2>Resultados da busca:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Medicamento</th><th>Quantidade</th><th>Vencimento</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['medicamento'] . "</td>";
            echo "<td>" . $row['quantidade'] . "</td>";
            echo "<td>" . $row['vencimento'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum medicamento encontrado.";
    }
} 



$conn->close();
?>
