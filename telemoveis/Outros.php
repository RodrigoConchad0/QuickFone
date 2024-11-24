<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('includes/linkscss.php') /* pode ser require */?>
</head>
<body style="margin-top: 100px;">
    <!-- Menu --->
    <?php require('includes/menu.php') ?>

<div class="alert alert-info" style=" text-align: center; color:black ">
Descreve bem o teu dispositivo e o problema referente a ele,
<br>
um técnico especializado irá consultar o teu pedido e receberás um email com o orçamento 
<br>
e com todas as informações que tens de seguir se quiseres realizar a reparação.
</div>

<div class="container" style="">
    <div class="row">
        <div class="col col-sm-10 col-lg-8 offset-sm-1 offset-lg-2">
            <form action="lixo.html" method="GET">
                <div class="mb-2">
                    <label class="form-label" for="#f-email">Endereço de email</label>
                    <input type="email" name="fEmail" id="f-email"
                    class="form-control" placeholder="Insira o seu email"
                    required>
        
                </div>
                <div class="mb-2">
                    <label class="form-label" for="#f-nome">Informações do dispositivo</label>
                    <input type="text" name="fNome" id="f-nome"
                    class="form-control" placeholder="Insira o nome do dispositivo (marca , modelo, etc...)">
        
                </div>
                <div class="mb-2">
                    <textarea class="form-control" name="fMsg" id="f-msg" rows="3" placeholder="Descrição dos problemas"></textarea>
                </div>
                
                <button class="btn btn-outline-primary">Enviar</button>
        
            </form>
        </div>
    </div>
  
</div>

<br>
<br>
<br>
<br>

<!-- Rodape -->
<?php require('includes/radape.php') ?>
</body>
</html>