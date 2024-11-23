<style>
    @media screen {
    img{
        
    }
    
 }
 .offcanvas {
        background-color: #f8f9fa;
    }

    .offcanvas-header {
        background-color: #40E0D0!important; 
        color: white; 
    }

    .menu-body a {
        display: block;
        text-decoration: none;
        padding: 10px;
        color: #333; 
        border-bottom: 1px solid #ddd; 
    }

    .menu-icon {
        
        cursor: pointer;
        font-size: 24px;
        background: none;
        border: none;
        color: white;
    }

    .menu-icon:hover {
        color:black;
    }
</style>
<header> 
<nav class="navbar navbar-expand-md bg-body-tertiary fixed-top" style="background-color: #40E0D0!important;">
        <div style="margin-left: 10px;">
            <button class="menu-icon btn  p-0 me-auto" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                ☰
            </button>
        </div>
        <div class="container-fluid">
                <?php   
                    $paginaAtual = basename($_SERVER['PHP_SELF']); 
                    $pastaAtual = dirname($_SERVER['PHP_SELF']); 

                    if (strpos($pastaAtual, '/telemoveis') !== false) {
                    if (strpos($pastaAtual, '/telemoveis/reparacao') !== false) {
                        $link = '../../index1.php';
                        $imagem = '../../imagens/logo.png';
                        $login = '../../login.php';
                    } else {
                        $link = '../index1.php';
                        $imagem = '../imagens/logo.png';
                        $login = '../login.php';
                    }
                    } else {
                        $link = 'index1.php';
                        $imagem = 'imagens/logo.png';
                        $login = 'login.php' ;
                    }
                ?>
                <a class="navbar-brand w-50" href="<?php echo $link; ?>">
                    <div class="col-2">  
                        <img class="float-start w-75" src="<?php echo $imagem; ?>" alt="logo">
                    </div>  
                </a>

                <div class="d-flex align-items-center justify-content-between">
        </div>

            

            <form class="d-flex w-50 ms-auto " role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
            </form>

            <a href="<?php echo $login; ?>" class="">
                <button type="button" class="btn ms-auto ">
                    <i class="bi bi-person-circle">  </i>
                </button>
            </a> 

</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</header>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
        </div>

        <?php   
                    $paginaAtual = basename($_SERVER['PHP_SELF']); 
                    $pastaAtual = dirname($_SERVER['PHP_SELF']); 

                    if (strpos($pastaAtual, '/telemoveis') !== false) {
                    if (strpos($pastaAtual, '/telemoveis/reparacao') !== false) {
                        $Todos ='   ../../index.php';
                        $Iphone ='   ../../telemoveis/Xiaomi.php';
                        $Xiaomi = '../../telemoveis/Xiaomi.php';
                        $Samsung = '../../telemoveis/Samsung.php';
                        $Huawei = '../../telemoveis/Hawei.php';
                        $Oppo = '../../telemoveis/Oppo.php';
                        $Outros = '../../telemoveis/Outros.php';
                    } else {
                        $Todos = '../index.php';
                        $Iphone ='   ../telemoveis/Xiaomi.php';
                        $Xiaomi = '../telemoveis/Xiaomi.php';
                        $Samsung = '../telemoveis/Samsung.php';
                        $Huawei = '../telemoveis/Hawei.php';
                        $Oppo = '../telemoveis/Oppo.php';
                        $Outros = '../telemoveis/Outros.php';
                    }
                    } else {
                        $Todos = 'index.php';
                        $Iphone = 'telemoveis/Iphone.php';
                        $Xiaomi = 'telemoveis/Xiaomi.php';
                        $Samsung = 'telemoveis/Samsung.php';
                        $Huawei = 'telemoveis/Hawei.php';
                        $Oppo = 'telemoveis/Oppo.php';
                        $Outros = 'telemoveis/Outros.php';
                    }
        ?>

        <div class="menu-body" >
            <a href="<?php echo $Todos; ?>">  
                Todos
            </a>
            <a href="<?php echo $Iphone; ?>">  
                Iphone
            </a>
            <a href="<?php echo $Xiaomi; ?>">
                Xioami
            </a>
            <a href="<?php echo $Samsung; ?>">       
                Samsung
            </a>
            <a href="<?php echo $Huawei; ?>">     
                Huawei
            </a>
            <a href="<?php echo $Oppo; ?>">
                Oppo
            </a>
            <a href="<?php echo $Outros; ?>">
                Outros
            </a>
        </div>
    </div>
