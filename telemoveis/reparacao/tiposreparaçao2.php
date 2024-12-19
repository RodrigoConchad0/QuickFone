<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('includes/linkscss.php') /* pode ser require */?>

    <style>
        .cartao {
            transition: transform 0.2s, box-shadow 0.2s;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }


    </style>
</head>
<br>
<br>
<body style="margin-top: 100px;">
<?php require('includes/menu.php') ?>

    <div class="container my-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="cartao highlight">
                    <img src="..\..\imagens\bateria.jpg" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Bateria</h5>
                    <button type="button" class="btn contact-button" style="background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal7">
                     (Preço)
                    </button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="cartao highlight">
                    <img src="..\..\imagens\frontal.png" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Câmara Frontal</h5>
                    <button type="button" class="btn contact-button" style="background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal6">
                     (Preço)
                    </button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="cartao highlight">
                    <img src="..\..\imagens\traseira.png" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Câmara Traseira</h5>
                    <button type="button" class="btn contact-button" style="background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal5">
                     (Preço)
                    </button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="cartao highlight">
                    <img src="..\..\imagens\ecra.jpg" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Vidro / Ecra</h5>
                    <button type="button" class="btn contact-button" style="background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal4">
                     (Preço)
                    </button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="cartao highlight">
                    <img src="..\..\imagens/power.jpg" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Botão Power</h5>
                    <button type="button" class="btn contact-button" style="background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal3">
                     (Preço)
                    </button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="cartao highlight">
                    <img src="..\..\imagens\conector.png" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Conector de carga</h5>
                    <button type="button" class="btn contact-button" style="background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal2">
                     (Preço)
                    </button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="cartao highlight">
                    <img src="..\..\imagens\faceid.png" alt="" style="max-width: 120px; max-height: 120px; width: ">
                    <h5>FaceID</h5>
                    <button type="button" class="btn contact-button" style="background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal1">
                     (Preço)
                    </button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="cartao highlight">
                    <img src="..\..\imagens\formatar.png" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Formatação</h5>
                    <button type="button" class="btn contact-button" style="background-color: #40E0D0" data-bs-toggle="modal" data-bs-target="#meuModal">
                     (Preço)
                    </button>
                </div>
            </div>

   

            <!-- Modal -->
            <div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="meuModalLabel">Formatação</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                    Eliminar todos os arquivos do telemovel e trazê-lo de volta às configurações de fábrica
                    Diagnóstico gratuito <br>
                    Higienização e limpeza do equipamento <br>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn" style="background-color: #32cc12">Repare</button>
                    </div>
                </div>
                </div>
            </div>

            <div class="modal fade" id="meuModal1" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="meuModalLabel">FaceID</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                    Diagnóstico gratuito <br>
                    Higienização e limpeza do equipamento <br>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn" style="background-color: #32cc12">Repare</button>
                    </div>
                </div>
                </div>
            </div>

            <div class="modal fade" id="meuModal2" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="meuModalLabel">Conector de carga</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                    A avaria da porta de ligação está relacionada maioritariamente com dificuldades no carregamento do smartphone. <br>
                    Diagnóstico gratuito <br>
                    Higienização e limpeza do equipamento <br>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn" style="background-color: #32cc12">Repare</button>
                    </div>
                </div>
                </div>
            </div>

            <div class="modal fade" id="meuModal3" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="meuModalLabel">Botão Power</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                    Substituição do botão <br>
                    Substituição rapida <br>
                    Diagnóstico gratuito <br>
                    Higienização e limpeza do equipamento <br>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn" style="background-color: #32cc12">Repare</button>
                    </div>
                </div>
                </div>
            </div>

            <div class="modal fade" id="meuModal4" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="meuModalLabel">Vidro / Ecra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                    Ecrã identico ão original <br>
                    Substituição rapida <br>
                    Diagnóstico gratuito <br>
                    Higienização e limpeza do equipamento <br>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn" style="background-color: #32cc12">Repare</button>
                    </div>
                </div>
                </div>
            </div>

            <div class="modal fade" id="meuModal5" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="meuModalLabel">Câmara Traseira</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                    Câmara Traseira igual à original <br>
                    Substituição rapida <br>
                    Diagnóstico gratuito <br>
                    Higienização e limpeza do equipamento <br>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn" style="background-color: #32cc12">Repare</button>
                    </div>
                </div>
                </div>
            </div>

            <div class="modal fade" id="meuModal6" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="meuModalLabel">Câmara Frontal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                    Câmara Frontal igual à original <br>
                    Substituição rapida <br>
                    Diagnóstico gratuito <br>
                    Higienização e limpeza do equipamento <br>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn" style="background-color: #32cc12">Repare</button>
                    </div>
                </div>
                </div>
            </div>

            <div class="modal fade" id="meuModal7" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="meuModalLabel">Bateria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                    Bateria com capacidade igual à original <br>
                    Substituição rapida <br>
                    Diagnóstico gratuito <br>
                    Higienização e limpeza do equipamento <br>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn" style="background-color: #32cc12">Repare</button>
                    </div>
                </div>
                </div>
            </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
            
        </div>
    </div>
<?php require('includes/radape.php') ?>
</body>
</html>