<style>
     @media screen {
        img{
            
        }
        
     }

</style>
<header> 

<nav class="navbar navbar-expand-md bg-body-tertiary fixed-top" style="background-color: #40E0D0!important;">
        <div class="container-fluid">

<?php

$paginaAtual = basename($_SERVER['PHP_SELF']); 
$pastaAtual = dirname($_SERVER['PHP_SELF']); 
// Verifica se a página atual está dentro da pasta telemoveis
if (strpos($pastaAtual, '/telemoveis') !== false) {
    // Verifica se está na pasta reparacao 
    if (strpos($pastaAtual, '/telemoveis/reparacao') !== false) {
        $link = '../../index.php'; // Se estiver na pasta reparacao ou em uma subpasta dela, usa ../../index.php
    } else {
        $link = '../index.php'; // Se estiver na pasta telemoveis mas não em reparacao, usa ../index.php
    }
} else {
    $link = 'index.php'; // Para outras páginas, usa index.php
}
?>



<a class="navbar-brand w-50" href="<?php echo $link; ?>">
    <div class="col-2">  
        <img class="float-start w-50" src="imagens/logo.png" alt="">
    </div>  
</a>
            <form class="d-flex w-50 ms-auto " role="search">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
            </form>
            <!--
            <div class="collapse navbar-collapse" id="nav-menu">
                <div class="navbar-nav nav-underline ms-auto">
                    <a href="#" class="nav-link"> Opção 1 </a>
                    <a href="#" class="nav-link"> Opção 2 </a>
    
                </div>
            </div> -->
             <button class="btn btn-light d-flex align-items-center" id="menuButton">
            <i class="bi bi-list fs-4 me-2"></i> Menu
        </button>

            <a href="login.php" class="">
            <button type="button" class="btn ms-auto ">
                <i class="bi bi-person-circle">  </i>
            </button></a> 
    
        </div>       
</nav>
</header> 
