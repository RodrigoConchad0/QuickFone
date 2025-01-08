<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('includes/connection.php');?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <style>
    body {
        background: url('imagens/background.jpg');
        background-size: cover;
    }

    .login-container {
        max-width: 400px;
        margin: auto;
        padding: 20px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 200px; 
    }

    .alert-custom {
        background-color: #f8d7da; 
        color: #721c24; 
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #f5c6cb;
    }
  </style>
</head>
<body>

<?php require('includes/menu.php') ?>

<div class="login-container">
    <h3 class="text-center mb-4">Login de Administrador</h3>

    <!-- Exibe um alerta caso o login falhe -->
    <?php if (isset($_GET['error'])): ?>
    <div class="alert-custom">
        <strong>Permissão Negada!</strong> User Admin ou password inválidos.
    </div>
    <?php endif; ?>
    <!-- Form do login  -->
    <form method="POST" action="processa_login.php">
        <div class="mb-3">
            <label for="username" class="form-label">User Admin</label>
            <input type="text" class="form-control" name="username" placeholder="Digite seu nome de utilizador" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" name="password" placeholder="Digite sua senha" required>
                <button class="btn btn-outline-secondary" type="button" id="showPassword">Mostrar</button>
            </div>
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
    </form>
    
</div>

<script src="js/bootstrap.bundle.min.js" src="js/menuresponsivo.js"> 

    const showPasswordButton = document.getElementById('showPassword');
    const passwordInput = document.querySelector('[name="password"]');

    // Função para alternar a visibilidade da senha
    showPasswordButton.addEventListener('click', () => {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showPasswordButton.textContent = 'Esconder';
        } else {
            passwordInput.type = 'password';
            showPasswordButton.textContent = 'Mostrar';
        }
    });
</script>

</body>
</html>
