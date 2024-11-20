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
<body>
    <?php require('includes/menu.php') ?>
    <div class="container my-5">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="cartao highlight">
                    <img src="imagens\bateria.webp" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Bateria</h5>
                    <a href="#" class="btn btn-secondary contact-button">Contacte-nos</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="cartao highlight">
                    <img src="imagens\frontal.png" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Câmara Frontal</h5>
                    <a href="#" class="btn btn-secondary contact-button">Contacte-nos</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="cartao highlight">
                    <img src="imagens\traseira.png" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Câmara Traseira</h5>
                    <a href="#" class="btn btn-secondary contact-button">Contacte-nos</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="cartao highlight">
                    <img src="imagens\ecra.webp" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Vidro / Ecra</h5>
                    <a href="#" class="btn btn-secondary contact-button">Contacte-nos</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="cartao highlight">
                    <img src="imagens\power.png" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Botão Power</h5>
                    <a href="#" class="btn btn-secondary contact-button">Contacte-nos</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="cartao highlight">
                    <img src="imagens\usb.png" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Conector Lightning</h5>
                    <a href="#" class="btn btn-secondary contact-button">Contacte-nos</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="cartao highlight">
                    <img src="imagens\faceid.png" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>FaceID</h5>
                    <a href="#" class="btn btn-secondary contact-button">Contacte-nos</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="cartao highlight">
                    <img src="imagens\formatar.png" alt="" style="max-width: 120px; max-height: 120px;">
                    <h5>Formatação</h5>
                    <a href="#" class="btn btn-secondary contact-button">Contacte-nos</a>
                </div>
            </div>

            
        </div>
    </div>
<?php require('includes/radape.php') ?>
</body>
</html>