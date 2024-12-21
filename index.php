

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPhone</title>
    <?php include('includes/linkscss.php') /* pode ser require */?>
   
</head>
<body style="margin-top: 150px;">

        <!-- Menu --->
    <?php require('includes/menu.php') ?>

    <!-- Hero Section -->
    <div style ="position: relative; height: 350px; width: 100%; ">
        <img style ="width: 100%; height: 100%; object-fit: cover;" src="imagens/background1.jpg" alt="Background">
        
    </div>

    <div class="container text-center mt-5">
        <div class="p-4 bg-white rounded shadow-sm">
            <h1 class="custom-font text-dark" style="background-color: rgba(23, 162, 184, 0.3);"  style="font-size: 2.3rem;">Escolha a marca do seu dispositivo</h1>
        </div>
     </div>

    

    <div class="container text-center" style="margin-bottom: 150px; margin-top: 100px;">
        <div class="row">
       
            <!-- Iphone -->
            <div class="col-md-4"  style="margin-bottom: 50px;">
                <a href="telemoveis\Iphone.php" class="text-decoration-none" style="color: black;">
                    <img class="img-fluid mb-1" src="imagens/iphone15pro.jpg" alt="Iphone" style="max-width: 300px; max-height: 300px;">
                    <h3 class="h6 text-center mt-1">Iphone</h3>
                </a>
            </div>
            <!-- Samsung -->
            <div class="col-md-4"  style="margin-bottom: 50px;">
                <a href="telemoveis\Samsung.php" class="text-decoration-none" style="color: black;">
                    <img class="img-fluid mb-1" src="imagens/s21ultra.jpg" alt="Samsung" style="max-width: 300px; max-height: 300px;">
                    <h3 class="h6 text-center mt-1">Samsung</h3>
                </a>
            </div>
            <!-- Hawei -->
            <div class="col-md-4" style="margin-bottom: 50px;">
                <a href="telemoveis\Hawei.php" class="text-decoration-none" style="color: black;">
                        <img class="img-fluid mb-1" src="imagens/nova11i.jpg" alt="Hawei" style="max-width: 300px; max-height: 300px;">
                        <h3 class="h6 text-center mt-1">Huawei</h3>
                </a>
            </div>
            <!-- Xiaomi -->
            <div class="col-md-4" style="margin-bottom: 50px;">
                <a href="telemoveis\Xiaomi.php" class="text-decoration-none" style="color: black;">
                        <img class="img-fluid mb-1" src="imagens/xiomi14.jpg" alt="Xiomi" style="max-width: 300px; max-height: 300px;">
                        <h3 class="h6 text-center mt-1">Xiaomi</h3>
                </a>
            </div>
            <!-- Oppo -->
            <div class="col-md-4" style="margin-bottom: 50px;">
                <a href="telemoveis\Oppo.php" class="text-decoration-none" style="color: black;">
                        <img class="img-fluid mb-1" src="imagens/oppofindx6.jpg" alt="Oppo" style="max-width: 300px; max-height: 300px;">
                        <h3 class="h6 text-center mt-1">Oppo</h3>
                </a>
            </div>
            <!-- Procurar -->
            <div class="col-md-4" style="margin-top:50px; margin-bottom: 50px;">
                <a href="telemoveis\Outros.php" class="text-decoration-none" style="color: black;">
                        <img class="img-fluid mb-1" src="imagens\procurar.png" alt="Lupa" style="max-width: 200px; max-height: 200px;">
                        <h3 class="h6 text-center mt-1">Outros</h3>
                </a>
            </div>
        </div>
    </div>



<!-- Rodape -->
<?php require('includes/rodape.php') ?>

</body>
</html>



<!-- Rodape -->
