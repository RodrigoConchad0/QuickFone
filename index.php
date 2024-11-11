<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('includes/linkscss.php') /* pode ser require */?>
</head>
<body>
    <!-- Menu --->
    <?php require('includes/menu.php') ?>

    <section class="services py-5">
        <div class="container text-center">
            <h2 class="mb-4">Escolha o dispositivo que pretende reparar</h2>
            <div class="row">
                <div class="col-md-2">
                    <div class="service-item p-4 bg-light rounded">
                        <img class="img-thumbnail" src="imagens/iphone.png" alt="Iphone">
                        <h3>Iphone</h3>
                        
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="service-item p-4 bg-light rounded">
                        <img class="img-thumbnail" src="imagens/samesung.webp" alt="Samsung">
                        <h3> Samsung </h3>
                        
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="service-item p-4 bg-light rounded">
                        <img class="img-thumbnail" src="imagens/hawei.png" alt="Hawei">
                        <h3>Hawei</h3>
                        
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="service-item p-4 bg-light rounded">
                        <img class="img-thumbnail" src="imagens/xiomi.png" alt="Xiomi">
                        <h3>Xiaomi</h3>
                        
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="service-item p-4 bg-light rounded">
                        <img class="img-thumbnail" src="imagens/oppo.webp" alt="Oppo">
                        <h3>Oppo</h3>
                        
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="service-item p-4 bg-light rounded">
                        <img class="img-thumbnail" src="imagens/lupa.png" alt="Xiomi">
                        <h3>Outros</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Rodape -->
<?php require('includes/radape.php') ?>

</body>
</html>