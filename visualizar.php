<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas do Formulário</title>
    <?php include('includes/linkscss.php'); ?>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 80px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            text-align: center;
            vertical-align: middle;
            padding: 15px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #004085; /* Cor mais escura, similar ao menu */
            color: white;
        }
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
        }
        .table-striped tbody tr:nth-child(even) {
            background-color: #f1f1f1;
        }
        /* Estilo do alerta com a cor do 'alert alert-info' */
        .alert-info {
            background-color: #d1ecf1; /* Cor de fundo azul claro */
            color: #0c5460; /* Cor do texto azul escuro */
            text-align: center;
            padding: 20px;
            font-size: 18px;
        }
        h2 {
            color: #004085; /* Cor do título em tom do menu */
            font-weight: bold;
            text-transform: uppercase;
        }
        .btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

    <!-- Menu -->
    <?php require('includes/menu.php'); ?>

    <div style="margin-top: 180px;" class="container">
        
        <div class="alert alert-info">
            <strong>Visualização de Formulários Recebidos</strong>
        </div>

        <h2 class="text-center my-4">Respostas do Formulário</h2>

        <!-- Tabela de respostas -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Completo</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Contato Preferido</th>
                    <th>Dispositivo</th>
                    <th>Descrição dos Problemas</th>
                    <th>Ações</th> 
                </tr>
            </thead>
            <tbody>
                <?php
               require('includes/connection.php'); 

                $sql = "SELECT * FROM formularios ORDER BY id ASC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['nome_completo']}</td>
                            <td>{$row['telefone']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['contato_preferido']}</td>
                            <td>{$row['dispositivo']}</td>
                            <td>{$row['descricao_problemas']}</td>
                            <td>
                                <button class='btn btn-delete' onclick='confirmDelete({$row['id']})'>Cliente Contactado</button>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>Nenhuma resposta encontrada.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <br><br><br><br>


    <script>
        // Função para confirmar a exclusão do pedido
        function confirmDelete(id) {
            const confirmAction = confirm("O pedido vai ser apagado, tem a certeza?");
            if (confirmAction) {
                // Enviar a requisição para excluir o registro
                window.location.href = 'delete_record.php?id=' + id;
            }
        }
    </script>

</body>
</html>
