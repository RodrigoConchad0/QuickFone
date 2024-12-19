<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('includes/linkscss.php') /* pode ser require */?>
    <style>
    body{
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
      margin-top: 200px; /* Espaçamento do topo */
    }
  </style>
</head>
<body>
<?php require('includes/menu.php') ?>

<div class="login-container">
    <h3 class="text-center mb-4">Crie a Sua Conta</h3>
    <form id="loginForm">
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" placeholder="Digite o seu e-mail" required>
      </div>
      <div class="mb-3">
        <label for="pri_nome" class="form-label">Primeiro Nome </label>
        <input type="pri_nome" class="form-control" id="pri_nome" placeholder="Digite o seu primeiro nome" required>
      </div>
      <div class="mb-3">
        <label for="seg_nome" class="form-label">Último Nome </label>
        <input type="seg_nome" class="form-control" id="seg_nome" placeholder="Digite o seu último nome" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Palavra-passe</label>
        <div class="input-group">
          <input type="password" class="form-control" id="password" placeholder="Digite a sua senha" required>
          <button class="btn btn-outline-secondary" type="button" id="showPassword">Mostrar</button>
        </div>
      </div>
      <div class="mb-3">
        <label for="confirma_password" class="form-label">Confirma a palavra-passe</label>
        <div class="input-group">
          <input type="password" class="form-control" id="password" placeholder="Repita a sua senha" required>
          <button class="btn btn-outline-secondary" type="button" id="showPassword">Mostrar</button>
        </div>
      </div>
      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary">Registar</button>
      </div>
    </form>
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