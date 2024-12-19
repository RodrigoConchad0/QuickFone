<?php
// Conexão com a base de dados
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'assistencia_telemoveis';

$conn = new mysqli($host, $user, $pass, $db);

// Verificar a conexão 
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificar se o ID foi passado
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Garantir que o ID é um número inteiro

    // Excluir da base de dados
    $sql = "DELETE FROM formularios WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar de volta para a página de respostas do formulário
        header("Location: visualizar.php");
        exit();
    } else {
        echo "Erro ao excluir o registro: " . $conn->error;
    }
}

$conn->close();
?>
