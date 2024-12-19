<?php
// Conexão com a base de dados
$host = 'localhost';
$dbname = 'assistencia_telemoveis';
$user = 'root'; // Substitua pelo seu usuário
$password = ''; // Substitua pela sua senha

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}

// Verificar credenciais
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM valida_login WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $username, 'password' => $password]);

    if ($stmt->rowCount() > 0) {
        // Redireciona ao sucesso
        header("Location: visualizar.php");
        exit();
    } else {
        // Redireciona com erro
        header("Location: login.php?error=1");
        exit();
    }
}
?>
