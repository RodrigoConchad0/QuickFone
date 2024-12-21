<style>
     @media screen {
        img{
            
        }
        
     }

</style>
<header> 
<?php
// Define a URL base dinamicamente
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/trabalho/";
?>
<nav class="navbar navbar-expand-md bg-body-tertiary fixed-top" style="background-color: #40E0D0!important;">
    <div class="container-fluid">

        <!-- Logo -->
        <div class="w-75">
            <a class="navbar-brand w-75" href="<?= $base_url ?>index.php">
                <div class="col-2">  
                    <img class="float-start w-75" src="<?= $base_url ?>imagens/logo.jpg" alt="Logo">
                </div>  
            </a>
        </div>

        <!-- Barra de pesquisa -->
        <form class="d-flex w-50 ms-auto" role="search">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        </form>

        <!-- Links de telemóveis -->
        <div class="collapse navbar-collapse" id="nav-menu">
            <div class="navbar-nav nav-underline ms-auto">
                <a href="<?= $base_url ?>telemoveis/Iphone.php" class="nav-link">Iphone</a>
                <a href="<?= $base_url ?>telemoveis/Samsung.php" class="nav-link">Samsung</a>
                <a href="<?= $base_url ?>telemoveis/Hawei.php" class="nav-link">Huawei</a>
                <a href="<?= $base_url ?>telemoveis/Xiaomi.php" class="nav-link">Xiaomi</a>
                <a href="<?= $base_url ?>telemoveis/Oppo.php" class="nav-link">Oppo</a>
            </div>
        </div>

        <!-- Botão de Login -->
        <a href="<?= $base_url ?>/login.php">
            <button type="button" class="btn ms-auto">
                <i class="bi bi-person-circle"></i>
            </button>
        </a> 

    </div>       
</nav>
</header>