<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('includes/linkscss.php') /* pode ser require */?>
    <style>
    body{
      background: url('imagens/background.webp');
      background-size: cover;
    }

    .login-container {
      max-width: 400px;
      margin: auto;
      padding: 20px;
      background: white;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-top: 200px; /* Espaçamento do topo */
    }
  </style>
</head>
<body>
<?php require('includes/menu.php') ?>

<div class="login-container">
    <h3 class="text-center mb-4">Inicie Sessão na Sua Conta</h3>
    <form id="loginForm">
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Palavra-passe</label>
        <div class="input-group">
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
          <button class="btn btn-outline-secondary" type="button" id="showPassword">Mostrar</button>
        </div>
      </div>
      <div class="d-flex justify-content-between">
        <a href="#" class="text-decoration-none">Esqueceu-se da sua palavra-passe?</a>
      </div>
      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary">Entrar</button>
      </div>
    </form>
    <p class="text-center mt-3">
      Não tem uma conta? <a href="#" class="text-decoration-none">Crie uma aqui</a>
    </p>
  </div>
  <br><br><br><br>
<?php require('includes/radape.php') ?>

<script src="js/bootstrap.bundle.min.js">

</script>

<script>
  
    const showPasswordButton = document.getElementById('showPassword');
    const passwordInput = document.getElementById('password');

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