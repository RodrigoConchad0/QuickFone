<?php require('includes/connection.php'); // Liga a página à base de dados através do ficheiro connection.php ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparações Telemóvel</title>
    <?php include('includes/linkscss.php'); // Inclui os ficheiros CSS necessários ?>
    
    <style>
        /* Adiciona espaçamento entre o menu e as divs */
        body {
            margin-top: 200px;
        }

        /* Configuração da disposição dos elementos da página */
        .container {
            display: flex;
            gap: 50px;
        }

        .esquerda {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .cartao {
            flex: 1 1 calc(33.333% - 20px);
            max-width: calc(33.333% - 20px);
            height: 250px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            background-color: white;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            margin: 10px;
        }

        .cartao:hover {
            transform: translateY(-5px);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .cartao img {
            max-width: 120px;
            max-height: 120px;
            margin-bottom: 10px;
        }

        .direita {
            width: 33%;
            height: 55%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 200px;
            right: 20px;
            background-color: white;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .direita img {
            width: auto;
            height: auto;
            margin-bottom: 10px;
            max-width: 200px;
            max-height: 200px;
        
        }

        @media (max-width: 768px) {
            /* Configurações para dispositivos móveis */
            .cartao {
                flex: 1 1 100%;
                max-width: 100%;
            }

            .direita {
                position: fixed;
                bottom: 0;
                margin-top: 350px;
                width: 100%;
                height: 500px;
                right: 0;
                box-shadow: none;
                background-color: rgb(159, 206, 206, 0.6);
                z-index: 1000;
            }

            .direita img {
                margin-top: -200px;
                width: 130px;
                height: 144px;
            }
        }
    </style>
</head>
<body>
    <?php require('includes/menu.php'); // Inclui o menu principal da página ?>

    <div class="container my-5">
        <!-- Coluna da esquerda -->
        <div class="esquerda">
            <?php
            // Obtém o ID do modelo passado no URL
            $idmodelo = isset($_GET['idmodelo']) ? intval($_GET['idmodelo']) : 0;

            // Função para buscar o nome de cada modelo 
            function obterNomeModelo($conn, $idmodelo) {
                $sql = "SELECT nome FROM componentes WHERE idmodelo = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $idmodelo);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                return $row ? $row['nome'] : "Modelo não encontrado"; // Retorna o nome ou uma mensagem padrão
            }
            
            // Função para buscar o preço de cada reparação com base no modelo e tipo de reparação
            function obterPreco($conn, $idmodelo, $tiporeparacao) {
                $sql = "SELECT preco FROM componentes WHERE idmodelo = ? AND tiporeparacao = ?";
                $stmt = $conn->prepare($sql); // Prepara a query SQL
                $stmt->bind_param("is", $idmodelo, $tiporeparacao); // Liga os parâmetros à query
                $stmt->execute(); // Executa a query
                $result = $stmt->get_result(); // Obtém os resultados
                $row = $result->fetch_assoc(); // Obtém a linha de resultados
                return $row ? $row['preco'] : "Preço não disponível"; // Retorna o preço ou uma mensagem
            }

            // Busca os preços na base de dados para cada reparação
            $precoBateria = obterPreco($conn, $idmodelo, 'Bateria');
            $precoCameraFrontal = obterPreco($conn, $idmodelo, 'CameraFrontal');
            $precoCameraTraseira = obterPreco($conn, $idmodelo, 'CameraTraseira');
            $precoVidroEcra = obterPreco($conn, $idmodelo, 'VidroEcra');
            $precoBotaoPower = obterPreco($conn, $idmodelo, 'BotaoPower');
            $precoConectorCarga = obterPreco($conn, $idmodelo, 'ConectorCarga');
            

            $nomeModelo = obterNomeModelo($conn, $idmodelo);
            ?>




            <!-- Cartão para a reparação de Bateria -->
            <div class="cartao" onclick="atualizarDetalhes('Bateria', 'Troca de bateria e higienização do equipamento', '../../imagens/bateriasubs.png')">
                <img src="../../imagens/bateria.jpg" alt="Bateria">
                <h5>Bateria</h5>
                
                <button type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Preço: <?= $precoBateria; ?> €
                </button>
                
            </div>

            <!-- Cartão para a reparação da Câmara Frontal -->
            <div class="cartao" onclick="atualizarDetalhes('Câmara Frontal', 'Detalhes sobre a câmara frontal...', '../../imagens/camarafrt.png')">
                <img src="../../imagens/frontal.png" alt="Câmara Frontal">
                <h5>Câmara Frontal</h5>
                
                <button type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Preço: <?= $precoCameraFrontal; ?> €
                </button>
                
            </div>

            <!-- Cartão para a reparação da Câmara Traseira -->
            <div class="cartao" onclick="atualizarDetalhes('Câmara Traseira', 'Detalhes sobre a câmara traseira...', '../../imagens/camaratraseirapartida.jpg')">
                <img src="../../imagens/traseira.png" alt="Câmara Traseira">
                <h5>Câmara Traseira</h5>
                
                <button type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Preço: <?= $precoCameraTraseira; ?> €
                </button>
                
            </div>

            <!-- Cartão para a reparação de Vidro/Ecrã -->
            <div class="cartao" onclick="atualizarDetalhes('Vidro/Ecrã', 'Detalhes sobre o vidro/ecrã...', '../../imagens/telemovelpartido.png')">
                <img src="../../imagens/ecra.jpg" alt="Vidro/Ecrã">
                <h5>Vidro/Ecrã</h5>
                
                <button type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Preço: <?= $precoVidroEcra; ?> €
                </button>
                
            </div>

            <!-- Cartão para a reparação do Botão Power -->
            <div class="cartao" onclick="atualizarDetalhes('Botão Power', 'Detalhes sobre o botão power...', '../../imagens/botao.png')">
                <img src="../../imagens/power.jpg" alt="Botão Power">
                <h5>Botão Power</h5>
                
                <button type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Preço: <?= $precoBotaoPower; ?> €
                </button>
                
            </div>

            <!-- Cartão para a reparação do Conector de Carga -->
            <div class="cartao" onclick="atualizarDetalhes('Conector de Carga', 'Detalhes sobre o conector de carga...', '../../imagens/conectordecarga.jpg')">
                <img src="../../imagens/conector.png" alt="Conector de Carga">
                <h5>Conector de Carga</h5>
                
                <button type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Preço: <?= $precoConectorCarga; ?> €
                </button>
                
            </div>

           
            
                <a class="cartao" href="../outros.php" style="text-decoration: none; color: inherit;">
                    <img src="../../imagens/procurar.png" alt="Vidro/Ecrã">
                    <h5 style="text-align: center;">outros</h5>
                </a>
            
            

        </div>

        <!-- Coluna da direita -->
        <div class="direita" id="detalhes">
        <h1 class="text-dark" style=" margin-bottom: 205px; background-color: #40E0D0; position: fixed-top; border: 2px solid rgb(0, 0, 0); padding: 5px 10px; margin: 0; font-size: 22px;"><?= htmlspecialchars($nomeModelo); ?></h1>

            <img src="../../imagens/telemovelpartido.png" alt="Detalhes"> 
            <h5 id="titulo-detalhes">Detalhes</h5>
            
            <p id="texto-detalhes">Selecione uma opção para ver os detalhes.</p> 
            <button onclick=" window.location.href='../Outros1.php'" type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Reparar Já
                </button>
             
        </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function atualizarDetalhes(titulo, texto, imagem,) {
            // Atualiza o conteúdo da div à direita
            document.getElementById('titulo-detalhes').innerText = titulo;
            document.getElementById('texto-detalhes').innerText = texto;
            document.querySelector('#detalhes img').src = imagem;
        }
            // Seleciona a div da direita
            const detalhes = document.getElementById('detalhes');

            // Função para verificar e aplicar o comportamento com base na largura da janela
            function verificarScroll()
        {
            if (window.innerWidth <= 768) { // Somente no modo responsivo
                // Adiciona o evento de scroll
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 1420) {
                        detalhes.style.display = 'none'; // Oculta a div após 600px
                    } else {
                        detalhes.style.display = 'flex'; // Mostra a div antes de 600px
                    }
                });
            } else {
                // Garante que a div reaparece em larguras maiores
                detalhes.style.display = 'flex';
            }
        }

            // Chama a função ao carregar a página e ao redimensionar a janela
                verificarScroll();
                 window.addEventListener('resize', verificarScroll);
    </script>

    <?php require('includes/radape.php'); ?> €
 </body>
</html>
