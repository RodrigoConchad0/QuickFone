<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistência Técnica</title>
    <?php 
        require('../includes/linkscss.php'); 
          
        require('../includes/connection.php'); 
        
        ?>
    


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

    <!-- Obter nome, preço e reparacao --->
    <?php 
    require('../includes/buscaid.php');
    
    
        $nomeModelo = obterNomeModelo1($conn, $id);
        $precoReparacao = obterPreco1($conn, $id);
        $tipoReparacao = obterReparacao($conn, $id);
    ?> 

    <!-- Menu -->
    <?php require('../includes/menu1.php'); ?>



    <div style="margin-top:190px;" class="alert alert-info text-center">
        <strong>Preenche corretamente o formulário </strong>
        <br>
        Um técnico especializado irá consultar o teu pedido e serás contactado
        <br>
        para procedermos com a reparação.
    </div>

    <?php require('../includes/formulario2.php'); ?>

                <!-- Envio dos dados para a base de dados --->
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    
                    $nomeCompleto = $_POST['fNomeCompleto'];
                    $telefone = $_POST['fTelefone'];
                    $email = $_POST['fEmail'];
                    $contatoPreferido = $_POST['fContatoPreferido'];
                    $dispositivo = $nomeModelo;;
                    $descricao = $tipoReparacao;
                    $preço = $precoReparacao;
                    


                    
                    // Inserção de dados na tabela
                    $sql = "INSERT INTO formularios (nome_completo, telefone, email, contato_preferido, dispositivo, descricao_problemas,preco) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param( "ssssssd" ,$nomeCompleto, $telefone, $email, $contatoPreferido, $dispositivo, $descricao, $preço);

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
    <?php require('../includes/rodape.php'); ?>

</body>
</html>
