<?php
require('includes/connection.php');

// atualiza o estado das reparações
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $estado = $_POST['estado'];

    $sql = "UPDATE formularios SET estado = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $estado, $id);

    if ($stmt->execute()) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        echo "Erro ao atualizar o estado.";
    }

    $stmt->close();
    $conn->close();
}
?>
