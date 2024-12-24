<?php
// Conexão com a base de dados
                $host = 'localhost';
                $user = 'web';
                $pass = 'web';
                $db = 'assistencia_telemoveis';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}

// Verificar credenciais
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM valida_login WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $user, 'password' => $pass]);

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
