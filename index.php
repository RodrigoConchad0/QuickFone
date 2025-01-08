
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPhone</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
   
</head>
<body style="margin-top: 150px;">

        <!-- Menu --->
    <?php require('includes/menu1.php') ?>

    <!-- Imagem  -->
    <div style ="position: relative; height: 350px; width: 100%; ">
        <img style ="width: 100%; height: 100%; object-fit: cover;" src="imagens/background1.jpg" alt="Background">
        
    </div>

    <!-- Texto  -->
    <div class="container text-center mt-5">
        <div class="p-4 bg-white rounded shadow-sm">
            <h1 class="custom-font " style=" color: rgba(74, 68, 105, 0.8); text-color:rgba(180, 230, 238, 0.8); font-size: 1.5rem;">Necessita de reparar o seu dispostivo?</h1>
            <h1 class="custom-font " style="color:rgb(180, 202, 243) ;  font-size: 2.5rem;">Indique a marca</h1>
        </div>
     </div>

     
    <!-- Marcas  -->
    <div class="container text-center" style="margin-bottom: 150px; margin-top: 100px;">
        <div class="row">
       
            
            <div class="col-md-4"  style="margin-bottom: 50px;">
                <a href="telemoveis.php?id=2" class="text-decoration-none" style="color: black;">
                    <img class="img-fluid mb-1" src="imagens/iphone15pro.jpg" alt="Iphone" style="max-width: 300px; max-height: 300px;">
                    <h3 class="h6 text-center mt-1">Iphone</h3>
                </a>
            </div>
           
            <div class="col-md-4"  style="margin-bottom: 50px;">
                <a href="telemoveis.php?id=3" class="text-decoration-none" style="color: black;">
                    <img class="img-fluid mb-1" src="imagens/s21ultra.jpg" alt="Samsung" style="max-width: 300px; max-height: 300px;">
                    <h3 class="h6 text-center mt-1">Samsung</h3>
                </a>
            </div>
            
            <div class="col-md-4" style="margin-bottom: 50px;">
                <a href="telemoveis.php?id=5" class="text-decoration-none" style="color: black;">
                        <img class="img-fluid mb-1" src="imagens/nova11i.jpg" alt="Hawei" style="max-width: 300px; max-height: 300px;">
                        <h3 class="h6 text-center mt-1">Huawei</h3>
                </a>
            </div>
           
            <div class="col-md-4" style="margin-bottom: 50px;">
                <a href="telemoveis.php?id=4" class="text-decoration-none" style="color: black;">
                        <img class="img-fluid mb-1" src="imagens/xiomi14.jpg" alt="Xiomi" style="max-width: 300px; max-height: 300px;">
                        <h3 class="h6 text-center mt-1">Xiaomi</h3>
                </a>
            </div>
            
            <div class="col-md-4" style="margin-bottom: 50px;">
                <a href="telemoveis.php?id=1" class="text-decoration-none" style="color: black;">
                        <img class="img-fluid mb-1" src="imagens/oppofindx6.jpg" alt="Oppo" style="max-width: 300px; max-height: 300px;">
                        <h3 class="h6 text-center mt-1">Oppo</h3>
                </a>
            </div>
            
            <div class="col-md-4" style="margin-top:50px; margin-bottom: 50px;">
                <a href="Outros.php" class="text-decoration-none" style="color: black;">
                        <img class="img-fluid mb-1" src="imagens\procurar.png" alt="Lupa" style="max-width: 200px; max-height: 200px;">
                        <h3 class="h6 text-center mt-1">Outros</h3>
                </a>
            </div>
        </div>
    </div>



<!-- Rodape -->
<?php require('includes/rodape.php') ?>

<script src="js/menuresponsivo.js"></script>

</body>
</html>


