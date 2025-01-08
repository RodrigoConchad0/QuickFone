
<?php require('../includes/connection.php'); // Liga a página à base de dados através do ficheiro connection.php ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('../includes/linkscss.php')?>
</head>
<body style="margin-top: 150px;">
<!-- Menu --->
<?php require('../includes/menu.php') ?>

        <!-- Botões de retroceder --->
        <div class="container mt-3 mb-5" style="margin-left: 0px; margin-top: -100px;">
                    <button style= "background-color: #40E0D0; color: black;"type="button" class="btn btn-secondary" onclick="history.back()">Home</button>
                    <button style= "background-color: #40E0D0; color: black;" type="button" class="btn btn-secondary" >Oppo</button>
        </div>
    <!-- Imagem marca --->
    <div style=" margin-top: -100px; font-size: 40px; text-align: center;" class=" text-black p-3 fixed-top;">
    <img style=" max-width: 180px; max-height: 180px;" class="img-fluid mb-1" src="../imagens/oppo.png" alt="oppo" >    
    </div>

    <!-- Modelos --->
    <div class="container text-center" style="margin-top: -30px; margin-bottom: 150px;">
    <div class="row">
        <?php
        // Query para buscar os modelos e fotos da tabela componentes
        $sql = "SELECT idmodelo, nome, imagem FROM componentes WHERE idmodelo > 0 AND idmodelo < 10 ORDER BY idmodelo";
        $result = $conn->query($sql);

        // Array para rastrear os idmodelos já exibidos
        $idmodelos_exibidos = [];
        $contador = 0; // Inicializa o contador

        // Verifica se há resultados
        if ($result->num_rows > 0) {
            // Loop para cada modelo
            while ($row = $result->fetch_assoc()) {
                $idmodelo = $row['idmodelo'];
                $nome = $row['nome'];
                $imagem = $row['imagem'];

                // Verifica se o idmodelo já foi exibido
                if (!in_array($idmodelo, $idmodelos_exibidos)) {
                    // Adiciona o idmodelo ao array de exibidos
                    $idmodelos_exibidos[] = $idmodelo;

                    // Incrementa o contador
                    $contador++;
                    ?>
                    <div class="col-md-4" style="margin-bottom: 50px;">
                        <a href="reparacao/tiposreparaçao.php?idmodelo=<?= $idmodelo; ?>" class="text-decoration-none" style="color: black;">
                            <div class="service-item p-4" style="max-width: 500px; max-height: 500px; width: 100%; height: 100%;">
                                <img class="img-fluid mb-1" src="../imagens/<?= $imagem; ?>" alt="<?= $nome; ?>" style="width: 225px; height: 300px;">
                                <h3 class="h6 text-center mt-1"><?= $nome; ?></h3>
                            </div>
                        </a>
                    </div>
                    <?php
                    // Adiciona a sombra após cada 3 modelos
                    if ($contador % 3 == 0) {
                        echo '<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded"></div>';
                    }
                }
            }
        } else {
            // Mensagem caso não existam modelos
            echo '<p class="text-center">Nenhum modelo encontrado.</p>';
        }
        ?>
    </div>
    
    <div class="col-md-4" style="margin-bottom: 50px;">
        <a href="../telemoveis\Outros.php" class="text-decoration-none" style="color: black;">
            <div class="service-item p-4" style=" max-width: 500px; max-height: 500px;">
                <img class="img-fluid mb-1" src="../imagens\procurar.png" alt="Lupa" style="max-width: 200px; max-height: 200px;">
                <h3 class="h6 text-center mt-1">Outros</h3>
            </div>
        </a>
    </div>
</div>

<!-- Rodape -->
<?php require('../includes/rodape.php') ?>

<script src="../js/modelos.js"></script>

</body>
</html>