<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "medicamentos_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$medicamento = $_POST['medicamento'];
$quantidade = $_POST['quantidade'];
$vencimento = $_POST['vencimento'];

// Insere os dados na tabela 'medicamentos'
$sql = "INSERT INTO medicamentos (medicamento, quantidade, vencimento) VALUES ('$medicamento', $quantidade, '$vencimento')";

if ($conn->query($sql) === TRUE) {
    echo "Medicamento registrado com sucesso!";
} else {
    echo "Erro ao registrar o medicamento: " . $conn->error;
}

$conn->close();
?>

