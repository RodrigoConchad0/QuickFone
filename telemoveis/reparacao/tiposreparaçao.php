<?php require('../../includes/connection.php'); // Liga a página à base de dados através do ficheiro connection.php ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparações Telemóvel</title>
    <?php include('../../includes/linkscss.php'); // Inclui os ficheiros CSS necessários ?>
    
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
            height: 45%;
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
            justify-content: center;
            width: auto;
            height: auto;
            margin-bottom: 10px;
            max-width: 200px;
            max-height: 200px;
        }
        .direita h1 {
            font-size: 15px; 
        }

        .direita h5 {
            font-size: 15px; 
        }

        .direita p {
            
            font-size: 15px; 
        }

        .direita button {
            
            font-size: 15px; 
        }

        @media (max-width: 768px) {
            /* Configurações para dispositivos móveis */
            .cartao {
                flex: 1 1 100%;
                max-width: 100%;
            }

            .direita {
                font-size: 20px;
                width: 100%;
                height: 250px;
                right: 0;
                box-shadow: none;
                background-color: rgb(159, 206, 206, 1);
                z-index: 1000;
                margin-top:100px;
            }

            .direita img {
                width: 25%;
                height: 55%;
            }

        .direita h1 {
            font-size: 10px; 
        }

        .direita h5 {
            font-size: 10px; 
        }

        .direita p {
            font-size: 10px; 
        }

        .direita button {
            font-size: 10px; 
        }
            

            
        }
    </style>
</head>
<body>
    <?php require('../../includes/menu1.php');?>
    <?php include('../../includes/buscaid.php');?>
    <?php  
            //Com o id obtem se a marca   
            if($idmodelo>=1 && $idmodelo<=9 ) $nomeMode="Oppo";
            if($idmodelo>=10 && $idmodelo<=32 ) $nomeMode="Apple";
            if($idmodelo>=33 && $idmodelo<=74 ) $nomeMode="Samsung";
            if($idmodelo>=75 && $idmodelo<=97 ) $nomeMode="Xiaomi";
            if($idmodelo>=98 && $idmodelo<=113 ) $nomeMode="Huawei";
     ?>

    <!-- Botões de retroceder --->
    <div style="margin-top:-60px;" class="container-fluid ">
        <div class="d-flex align-items-center">
            <div>
                <button style="background-color: #40E0D0; color: black;" type="button" class="btn btn-secondary" onclick="window.location.href='../../index.php'">Home</button>
                <button style="background-color: #40E0D0; color: black;" type="button" class="btn btn-secondary" onclick="history.back()"><?= htmlspecialchars($nomeMode); ?></button>
                <button style="background-color: #40E0D0; color: black;" type="button" class="btn btn-secondary"><?= htmlspecialchars($nomeModelo); ?></button>
            </div>
       </div>
    </div>

    <div class="container my-5">
        <!-- Coluna da esquerda -->
        <div class="esquerda">
            <!-- Reparação de Bateria -->
            <div class="cartao" style=""; onclick="atualizarDetalhes('Bateria', 'Troca de bateria e higienização do equipamento', '../../imagens/bateriasubs.png' ,<?=$idBateria?>)">
                <img src="../../imagens/bateria.jpg" alt="Bateria">
                <h5>Bateria</h5>
                
                <button type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Preço: <?= $precoBateria; ?> €
                </button>
                
            </div>

            <!-- Reparação da Câmara Frontal -->
            <div class="cartao" onclick="atualizarDetalhes('Câmara Frontal', 'Detalhes sobre a câmara frontal...', '../../imagens/camarafrt.png' ,<?=$idCameraFrontal?>)">
                <img src="../../imagens/frontal.png" alt="Câmara Frontal">
                <h5>Câmara Frontal</h5>
                
                <button type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Preço: <?= $precoCameraFrontal; ?> €
                </button>
                
            </div>

            <!-- Reparação da Câmara Traseira -->
            <div class="cartao" onclick="atualizarDetalhes('Câmara Traseira', 'Detalhes sobre a câmara traseira...', '../../imagens/camaratraseirapartida.jpg',<?=$idCameraTraseira?>)">
                <img src="../../imagens/traseira.png" alt="Câmara Traseira">
                <h5>Câmara Traseira</h5>
                
                <button type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Preço: <?= $precoCameraTraseira; ?> €
                </button>
                
            </div>

            <!-- Reparação de Vidro/Ecrã -->
            <div class="cartao" onclick="atualizarDetalhes('Vidro/Ecrã', 'Detalhes sobre o vidro/ecrã...', '../../imagens/telemovelpartido.png',<?=$idVidroEcra?>)">
                <img src="../../imagens/ecra.jpg" alt="Vidro/Ecrã">
                <h5>Vidro/Ecrã</h5>
                
                <button type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Preço: <?= $precoVidroEcra; ?> €
                </button>
                
            </div>

            <!-- Reparação do Botão Power -->
            <div class="cartao" onclick="atualizarDetalhes('Botão Power', 'Detalhes sobre o botão power...', '../../imagens/botao.png',<?=$idBotaoPower?>)">
                <img src="../../imagens/power.jpg" alt="Botão Power">
                <h5>Botão Power</h5>
                
                <button type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Preço: <?= $precoBotaoPower; ?> €
                </button>
                
            </div>

            <!-- Reparação do Conector de Carga -->
            <div class="cartao" onclick="atualizarDetalhes('Conector de Carga', 'Detalhes sobre o conector de carga...', '../../imagens/conectordecarga.jpg' , <?=$idConectorCarga?> )">
                <img src="../../imagens/conector.png" alt="Conector de Carga">
                <h5>Conector de Carga</h5>
                
                <button type="button" class="btn contact-button" style= "background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                    Preço: <?= $precoConectorCarga; ?> €
                </button>
                
            </div>

           
            <!-- Outros --->
            <a class="cartao" href="../outros.php?idmodelo=<?=$idmodelo ?>" style="text-decoration: none; color: inherit;">
                <img src="../../imagens/procurar.png" alt="Vidro/Ecrã">
                <h5 style="text-align: center;">outros</h5>
            </a>
            
            
                <?php 
                    if ($idmodelo >= 34 && $idmodelo <= 74) {
                        $nomeModelo = "Samsung " . $nomeModelo;
                    }
                ?>

        </div>
        <!-- Coluna da direita -->
        <div class="direita" id="detalhes">
        <h1 class=" text-dark ;" style=" margin-bottom: 205px; background-color: #40E0D0; position: fixed-top; border: 2px solid rgb(0, 0, 0); padding: 5px 10px; margin: 0; "><?= htmlspecialchars($nomeModelo); ?></h1>

            <img src="../../imagens/telemovelpartido.png" alt="Detalhes"> 

          

            <h5  id="titulo-detalhes">Detalhes</h5>
            
            <p id="texto-detalhes">Selecione uma opção para ver os detalhes.</p> 
            <a id="link-reparar" href="#" type="button" class="txt btn contact-button" style="background-color: #40E0D0">
                Reparar Já
            </a>
             
        </div> 
    </div>
    

    <script>
        
        function atualizarDetalhes(titulo, texto, imagem, id) {
            // Atualiza o conteúdo da div à direita
            document.getElementById('titulo-detalhes').innerText = titulo;
            document.getElementById('texto-detalhes').innerText = texto;
            document.querySelector('#detalhes img').src = imagem;
            document.getElementById('link-reparar').href = `../Outros1.php?id=${id}`;
        }
            // Seleciona a div da direita
            const detalhes = document.getElementById('detalhes');

            // Função para verificar e aplicar o comportamento com base na largura da janela
            function verificarScroll()
        {
            if (window.innerWidth <= 768) { // Somente no modo responsivo
                // Adiciona o evento de scroll
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 1620) {
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

    <?php require('../../includes/rodape.php'); ?> €
 </body>
</html>
