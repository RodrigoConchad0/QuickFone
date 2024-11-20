<!DOCTYPE html>
<html lang="pt">
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
        <div class="row">
            
            <!-- Iphone -->
            <div class="col-md-2">
                <a href="telemoveis\Iphone.php" class="text-decoration-none" style="color: black;">
                    <div class="service-item p-4 bg-light rounded d-flex flex-column align-items-center justify-content-start" style="height: 200px;">
                        <img class="img-fluid mb-1" src="imagens/iphone.png" alt="Iphone" style="max-width: 120px; max-height: 120px;">
                        <h3 class="h6 text-center mt-1">Iphone</h3>
                    </div>
                </a>
            </div>
            <!-- Samesung -->
            <div class="col-md-2">
                <a href="telemoveis\Samesung.php" class="text-decoration-none" style="color: black;">
                    <div class="service-item p-4 bg-light rounded d-flex flex-column align-items-center justify-content-start" style="height: 200px;">
                        <img class="img-fluid mb-1" src="imagens/samesung.webp" alt="Samsung" style="max-width: 120px; max-height: 120px;">
                        <h3 class="h6 text-center mt-1">Samesung</h3>
                    </div>
                </a>
            </div>
            <!-- Hawei -->
            <div class="col-md-2">
                <a href="telemoveis\Hawei.php" class="text-decoration-none" style="color: black;">
                    <div class="service-item p-4 bg-light rounded d-flex flex-column align-items-center justify-content-start" style="height: 200px;">
                        <img class="img-fluid mb-1" src="imagens/hawei.png" alt="Hawei" style="max-width: 120px; max-height: 120px;">
                        <h3 class="h6 text-center mt-1">Hawei</h3>
                    </div>
                </a>
            </div>
            <!-- Xiaomi -->
            <div class="col-md-2">
                <a href="telemoveis\Xiaomi.php" class="text-decoration-none" style="color: black;">
                    <div class="service-item p-4 bg-light rounded d-flex flex-column align-items-center justify-content-start" style="height: 200px;">
                        <img class="img-fluid mb-1" src="imagens/xiomi.png" alt="Xiomi" style="max-width: 120px; max-height: 120px;">
                        <h3 class="h6 text-center mt-1">Xiaomi</h3>
                    </div>
                </a>
            </div>
            <!-- Oppo -->
            <div class="col-md-2">
                <a href="telemoveis\Oppo.php" class="text-decoration-none" style="color: black;">
                    <div class="service-item p-4 bg-light rounded d-flex flex-column align-items-center justify-content-start" style="height: 200px;">
                        <img class="img-fluid mb-1" src="imagens/oppo.webp" alt="Oppo" style="max-width: 120px; max-height: 120px;">
                        <h3 class="h6 text-center mt-1">Oppo</h3>
                    </div>
                </a>
            </div>
            <!-- Procurar -->
            <div class="col-md-2">
                <a href="" class="text-decoration-none" style="color: black;">
                    <div class="service-item p-4 bg-light rounded d-flex flex-column align-items-center justify-content-start" style="height: 200px;">
                        <img class="img-fluid mb-1" src="imagens/lupa.png" alt="Lupa" style="max-width: 120px; max-height: 120px;">
                        <h3 class="h6 text-center mt-1">Procurar</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Rodape -->
<?php require('includes/radape.php') ?>

</body>
</html>