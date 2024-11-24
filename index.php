<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('includes/linkscss.php') /* pode ser require */?>
</head>
<body style="margin-top: 150px;">
    <!-- Menu --->
    <?php require('includes/menu.php') ?>


    <div class="container text-center" style="margin-bottom: 150px;">
        <div class="row">
       
            <!-- Iphone -->
            <div class="col-md-4"  style="margin-bottom: 50px;">
                <a href="telemoveis\Iphone.php" class="text-decoration-none" style="color: black;">
                    <div class="service-item p-4 bg-light rounded" style=" max-width: 500px; max-height: 500px;">
                        <img class="img-fluid mb-1" src="imagens/iphone.png" alt="Iphone" style="max-width: 300px; max-height: 300px;">
                        <h3 class="h6 text-center mt-1">Iphone</h3>
                    </div>
                </a>
            </div>
            <!-- Samsung -->
            <div class="col-md-4"  style="margin-bottom: 50px;">
                <a href="telemoveis\Samsung.php" class="text-decoration-none" style="color: black;">
                    <div class="service-item p-4 bg-light rounded" style=" max-width: 500px; max-height: 500px;">
                        <img class="img-fluid mb-1" src="imagens/samesung.webp" alt="Samsung" style="max-width: 300px; max-height: 300px;">
                        <h3 class="h6 text-center mt-1">Samsung</h3>
                    </div>
                </a>
            </div>
            <!-- Hawei -->
            <div class="col-md-4" style="margin-bottom: 50px;">
                <a href="telemoveis\Hawei.php" class="text-decoration-none" style="color: black;">
                    <div class="service-item p-4 bg-light rounded" style=" max-width: 500px; max-height: 500px;">
                        <img class="img-fluid mb-1" src="imagens/hawei.png" alt="Hawei" style="max-width: 300px; max-height: 300px;">
                        <h3 class="h6 text-center mt-1">Huawei</h3>
                    </div>
                </a>
            </div>
            <!-- Xiaomi -->
            <div class="col-md-4" style="margin-bottom: 50px;">
                <a href="telemoveis\Xiaomi.php" class="text-decoration-none" style="color: black;">
                    <div class="service-item p-4 bg-light rounded" style=" max-width: 500px; max-height: 500px;">
                        <img class="img-fluid mb-1" src="imagens/xiomi.png" alt="Xiomi" style="max-width: 300px; max-height: 300px;">
                        <h3 class="h6 text-center mt-1">Xiaomi</h3>
                    </div>
                </a>
            </div>
            <!-- Oppo -->
            <div class="col-md-4" style="margin-bottom: 50px;">
                <a href="telemoveis\Oppo.php" class="text-decoration-none" style="color: black;">
                    <div class="service-item p-4 bg-light rounded" style=" max-width: 500px; max-height: 500px;">
                        <img class="img-fluid mb-1" src="imagens/oppo.webp" alt="Oppo" style="max-width: 300px; max-height: 300px;">
                        <h3 class="h6 text-center mt-1">Oppo</h3>
                    </div>
                </a>
            </div>
            <!-- Procurar -->
            <div class="col-md-4" style="margin-bottom: 50px;">
                <a href="telemoveis\Outros.php" class="text-decoration-none" style="color: black;">
                    <div class="service-item p-4 bg-light rounded" style=" max-width: 500px; max-height: 500px;">
                        <img class="img-fluid mb-1" src="imagens\procurar.png" alt="Lupa" style="max-width: 300px; max-height: 300px;">
                        <h3 class="h6 text-center mt-1">Outros</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>



<!-- Rodape -->
<?php require('includes/radape.php') ?>

</body>
</html>