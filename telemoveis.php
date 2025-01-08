<?php require('includes/connection.php'); // Liga a página à base de dados através do ficheiro connection.php ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
</head>
<body style="margin-top: 180px;">
<!-- Menu --->
<?php require('includes/menu.php') ?>

<div class="container mt-3 mb-5" >
    <?php
    // Define o mapeamento para cada ID
    $marcas = [
        1 => ['nome' => 'Oppo', 'imagem' => 'oppo.png', 'alt' => 'oppo'],
        2 => ['nome' => 'Apple', 'imagem' => 'apple.png', 'alt' => 'apple'],
        3 => ['nome' => 'Samsung', 'imagem' => 'samsunglogo.png', 'alt' => 'samsung'],
        4 => ['nome' => 'Xiaomi', 'imagem' => 'xiomi.png', 'alt' => 'xiaomi'],
        5 => ['nome' => 'Huawei', 'imagem' => 'huawei.png', 'alt' => 'huawei']
    ];

    // Obtém o ID passado no URL e verifica se está no array
    $id = isset($_GET['id']) ? intval($_GET['id']) : 1;
    $marca = $marcas[$id] ?? $marcas[1]; // Padrão para Oppo se o ID for inválido
    ?>


    <!-- Botões de retroceder -->
    <a href="index.php" class="btn btn-secondary" style="background-color: #40E0D0; color: black;">Home</a>
    <button style="background-color: #40E0D0; color: black;" type="button" class="btn btn-secondary"><?= $marca['nome']; ?></button>

    <!-- Imagem da marca -->
    <div style=" text-align: center;" class="text-black p-3 fixed-top;">
        <img style="  max-width: 130px; max-height: 130px;" class="img-fluid mb-1" src="imagens/<?= $marca['imagem']; ?>" alt="<?= $marca['alt']; ?>">    
    </div>

</div>

<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded"></div>

    <!-- Modelos --->
    <div class="container text-center" style=" margin-bottom: 100px;">
        <div class="row">
            <?php
            // Obtém o ID passado no URL
            $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

            // Define os intervalos com base no ID
            $intervalos = [
                1 => [1, 9],
                2 => [10, 32],
                3 => [33, 74],
                4 => [75, 97],
                5 => [98, 113]
            ];

            // Determina os limites de intervalo com base no ID ou usa valores padrão
            $intervalo = $intervalos[$id] ?? [0, 10];
            $min = $intervalo[0];
            $max = $intervalo[1];

            // Query para buscar os modelos e fotos da tabela componentes
            $sql = "SELECT idmodelo, nome, imagem FROM componentes WHERE idmodelo >= $min AND idmodelo <= $max ORDER BY idmodelo";
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
                            <a href="tiposreparaçao.php?idmodelo=<?= $idmodelo; ?>" class="text-decoration-none" style="color: black;">
                                <div class="service-item p-4" style="max-width: 500px; max-height: 500px; width: 100%; height: 100%;">
                                    <img class="img-fluid mb-1" src="imagens/<?= $imagem; ?>" alt="<?= $nome; ?>" style="width: 225px; height: 300px;">
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
            <div class="col-md-4" style="margin-bottom: 50px;">
             <a href="Outros.php" class="text-decoration-none" style="color: black;">
                <div class="service-item p-4" style=" max-width: 500px; max-height: 500px;">
                    <img class="img-fluid mb-1" src="imagens\procurar.png" alt="Lupa" style="max-width: 230px; max-height: 230px;">
                    <h3 class="h6 text-center mt-1">Outros</h3>
                </div>
            </a>
     </div>
        </div>
        
    </div>

    

<!-- Rodape -->
<?php require('includes/rodape.php') ?>

<script src="js/modelos.js"></script>

</body>
</html>