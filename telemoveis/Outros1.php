<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistência Técnica</title>
    <?php include('includes/linkscss.php'); ?>
    <?php include('includes/connection.php'); ?>
    <style>
        /* Ajusta a margem superior para que o texto fique visível, acima do menu */
        .alert-info {
            margin-top: 120px; 
            background-color: #e7f3fe; 
            color: #004085; 
            padding: 20px;
            border: 1px solid #b8daff;
            font-size: 18px;
        }

        /* Estilo para o botão de envio do formulário */
        .btn-outline-primary {
            background-color: #007bff; 
            color: white; 
            border-color: #007bff; 
        }

        /* Estilo do alerta de sucesso ou erro após o envio */
        .alert-custom {
            background-color: #28a745; 
            color: white; 
            padding: 15px; 
            margin-top: 20px; 
            text-align: center;
            font-size: 18px; 
        }

        .alert-danger {
            background-color: #dc3545; 
        }
    </style>
</head>
<body style="margin-top: 100px;">
    <!-- Menu -->
    <?php require('includes/menu.php'); ?>


    <div class="alert alert-info text-center">
        <strong>refere o nome do dispositivo que selecionaste anteriormente e a peça que desejas alterar.</strong>
        <br>
        Um técnico especializado irá consultar o teu pedido e serás contactado para prosseguirmos com a reparação
        <br>
       
    </div>

    <div class="container">
        <div class="row">
            <div class="col col-sm-10 col-lg-8 offset-sm-1 offset-lg-2">
                <!-- Formulário de envio de informações -->
                <form action="" method="POST">
                    <div class="mb-2">
                        <label class="form-label" for="#f-nome-completo">Nome Completo</label>
                        <input type="text" name="fNomeCompleto" id="f-nome-completo"
                        class="form-control" placeholder="Insira o seu nome completo" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="#f-telefone">Número de Telefone</label>
                        <input type="tel" name="fTelefone" id="f-telefone"
                        class="form-control" placeholder="Insira o seu número de telefone" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="#f-email">Endereço de Email</label>
                        <input type="email" name="fEmail" id="f-email"
                        class="form-control" placeholder="Insira o seu email" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Forma de Contato Preferível</label>
                        <select class="form-select" name="fContatoPreferido">
                            <option value="email">Email</option>
                            <option value="telefone">Telefone</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="#f-nome">Informações do Dispositivo</label>
                        <input type="text" name="fNome" id="f-nome"
                        class="form-control" placeholder="Insira o nome do dispositivo (marca, modelo, etc...)">
                    </div>
                    <div class="mb-2">
                        <textarea class="form-control" name="fMsg" id="f-msg" rows="3" placeholder="Descrição dos problemas"></textarea>
                    </div>
                    <button class="btn btn-outline-primary" type="submit">Enviar</button>
                </form>

                <!-- mensagens de sucesso ou erro -->
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    
                    $nomeCompleto = $_POST['fNomeCompleto'];
                    $telefone = $_POST['fTelefone'];
                    $email = $_POST['fEmail'];
                    $contatoPreferido = $_POST['fContatoPreferido'];
                    $dispositivo = $_POST['fNome'];
                    $descricao = $_POST['fMsg'];

                    
                    // Inserção de dados na tabela
                    $sql = "INSERT INTO formularios (nome_completo, telefone, email, contato_preferido, dispositivo, descricao_problemas) 
                            VALUES (?, ?, ?, ?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ssssss", $nomeCompleto, $telefone, $email, $contatoPreferido, $dispositivo, $descricao);

                    if ($stmt->execute()) {
                        // Exibe mensagem de sucesso
                        echo "<div class='alert-custom'>Formulário enviado com sucesso!</div>";
                    } else {
                        // Exibe mensagem de erro
                        echo "<div class='alert-danger text-center'>Erro ao enviar o formulário: " . $stmt->error . "</div>";
                    }

                    $stmt->close();
                    $conn->close();
                }
                ?>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <!-- Rodapé -->
    <?php require('includes/radape.php'); ?>

</body>
</html>
