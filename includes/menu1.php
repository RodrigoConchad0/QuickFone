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
<nav class="navbar navbar-expand-lg  fixed-top"  style="background-color: #40E0D0!important;"> 
        <!-- Menu --->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <nav class="navbar" style="margin-left: 15px">
                <div>
                <a class="navbar-brand" href="<?= $base_url ?>index.php">
                <img src="<?= $base_url ?>imagens/logo.jpg" width="100" height="100" class="d-inline-block align-top" alt="">
                </a>
                </div>
            </nav>
            
            
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0" style="margin: 0 auto">
            <li class="nav-item active" style="margin-right:130px ">
                <div style="margin-top: -10px; max-width: 30px; max-height: 30px;">
                <a href="<?= $base_url ?>telemoveis/Iphone.php" class="nav-link text-center">
                <img style="max-width: 30px; max-height: 30px;" class="img-fluid mb-1" src="<?= $base_url ?>imagens/apple.png" alt="APPLE" >
                </a>
                </div>
            </li>
            <li class="nav-item active" style="margin-right:200px ">
                <div style="margin-top: -40px; max-width: 30px; max-height: 30px;">
                <a href="<?= $base_url ?>telemoveis/Samsung.php" class="nav-link ">
                    <img style=" max-width: 100px; max-height: 100px;" class="img-fluid mb-1" src="<?= $base_url ?>imagens/samsunglogo.png" alt="Samsung" > 
                </a>
                </div>
            </li>
            <li class="nav-item active" style="margin-right:200px ">
                <div style="margin-top: -10px; max-width: 30px; max-height: 30px;">
                <a href="<?= $base_url ?>telemoveis/Hawei.php" class="nav-link">
                    <img style=" max-width: 80px; max-height: 80px;" class="img-fluid mb-1" src="<?= $base_url ?>imagens/huawei.png" alt="Huawei" >
                </a>
                </div>
            </li>
            <li class="nav-item active" style="margin-right:150px ">
                <div style="margin-top: 0px; max-width: 30px; max-height: 30px;">
                <a href="<?= $base_url ?>telemoveis/Xiaomi.php" class="nav-link">
                    <img style=" max-width: 30px; max-height: 30px;" class="img-fluid mb-1" src="<?= $base_url ?>imagens/xiomi.png" alt="Xiaomi" >
                </a>
                </div>
            </li>
            <li class="nav-item active" style="margin-right:150px ">
                <div style="margin-top: -35px; max-width: 30px; max-height: 30px;">
                <a href="<?= $base_url ?>telemoveis/Oppo.php" class="nav-link">
                    <img style=" max-width: 100px; max-height: 100px;" class="img-fluid mb-1" src="<?= $base_url ?>imagens/oppo.png" alt="oppo" >  
                </a>
            </div>
            </li>
            </ul>
            <a href="<?= $base_url ?>/login.php">
                <button type="button" class="btn ms-auto">
                    <i class="bi bi-lock"></i>
                </button>
            </a>
        </div>


        <!-- Menu responsivo --->
        <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="p-4 justify-content-center align-items-center text-center">
            <nav class="navbar justify-content-center" style="margin-left: 15px">
                <a class="navbar-brand" href="<?= $base_url ?>index.php">
                <img src="<?= $base_url ?>imagens/logo.jpg" width="100" height="100" class="d-inline-block align-top" alt="">
                </a>
            </nav>
            
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a href="<?= $base_url ?>telemoveis/Iphone.php" class="nav-link">Iphone</a>
            </li>
            <li class="nav-item active">
                <a href="<?= $base_url ?>telemoveis/Samsung.php" class="nav-link">Samsung</a>
            </li>
            <li class="nav-item active">
                <a href="<?= $base_url ?>telemoveis/Hawei.php" class="nav-link">Huawei</a>
            </li>
            <li class="nav-item active">
                <a href="<?= $base_url ?>telemoveis/Xiaomi.php" class="nav-link">Xiaomi</a>
            </li>
            <li class="nav-item active">
                <a href="<?= $base_url ?>telemoveis/Oppo.php" class="nav-link">Oppo</a>
            </li>
            </ul>
            <a href="<?= $base_url ?>/login.php">
                <button type="button" class="btn ms-auto">
                    <i class="bi bi-lock"></i>
                </button>
            </a>
        </div>
            </div>
        <nav class="navbar">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        </div>
     
</nav>

<script>
    //Menu responsivo
    document.addEventListener('DOMContentLoaded', function () {
        var collapseToggle = document.querySelector('[data-bs-toggle="collapse"]');
        if (collapseToggle) {
            collapseToggle.addEventListener('click', function () {
                var target = document.querySelector(this.getAttribute('data-bs-target'));
                if (target) {
                    target.classList.toggle('show');
                }
            });
        }
    });
    </script>
</header>


