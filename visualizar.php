<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Respostas do Formulário</title>
    <?php include('includes/linkscss.php'); ?>
</head>
<body>

    <!-- Menu -->
    <?php require('includes/menu1.php'); ?>

    <div style="margin-top: 180px;" class="container">
        
        <div class="alert alert-info text-center">
            <strong>Visualização de Formulários Recebidos</strong>
        </div>

        <h2 class="text-center my-4">Respostas do Formulário</h2>

        <!-- PHP para atualizar o estado -->
        <?php
        require('includes/connection.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['estado'])) {
            $id = intval($_POST['id']);
            $novo_estado = $conn->real_escape_string($_POST['estado']);

            $sql_update = "UPDATE formularios SET estado = '$novo_estado' WHERE id = $id";
            if ($conn->query($sql_update) === TRUE) {
                echo "<div class='alert alert-success'>Estado atualizado com sucesso!</div>";
            } else {
                echo "<div class='alert alert-danger'>Erro ao atualizar o estado: " . $conn->error . "</div>";
            }
        }
        ?>

        <!-- Tabela de respostas -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome Completo</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Contato Preferido</th>
                    <th>Dispositivo</th>
                    <th>Descrição dos Problemas</th>
                    <th>Preço</th> 
                    <th>Estado</th> 
                    <th style="max-heigth">Ações</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM formularios ORDER BY estado ASC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['nome_completo']}</td>
                            <td>{$row['telefone']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['contato_preferido']}</td>
                            <td>{$row['dispositivo']}</td>
                            <td>{$row['descricao_problemas']}</td>
                            <td>{$row['descricao_problemas']}</td>" . ($row['preco'] != null ? "<td>{$row['preco']}€</td>" : "<td></td>") . "
                            <td>
                                <form method='POST' style='margin: 0;'>
                                    <input type='hidden' name='id' value='{$row['id']}'>
                                    <select name='estado' class='form-select' onchange='this.form.submit()'>
                                        <option value='AGUARDA_CONTACTO'" . ($row['estado'] === 'AGUARDA_CONTACTO' ? ' selected' : '') . ">Por Contactar</option>
                                        <option value='CONTACTADO'" . ($row['estado'] === 'CONTACTADO' ? ' selected' : '') . ">Contactado</option>
                                        <option value='A_REPARAR'" . ($row['estado'] === 'A_REPARAR' ? ' selected' : '') . ">A Reparar</option>
                                        <option value='PRONTO'" . ($row['estado'] === 'PRONTO' ? ' selected' : '') . ">Reparado</option>
                                    </select>
                                </form>
                            </td>
                            <td>
                                <button class='btn btn-info' onclick='confirmDelete({$row['id']})'>Reparação totalmente concluída</button>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='9' class='text-center'>Nenhuma resposta encontrada.</td></tr>";
                }
                
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <br><br><br><br>

    <script src="js/menuresponsivo.js">
        // Função para confirmar a exclusão do pedido
        function confirmDelete(id) {
            const confirmAction = confirm("O pedido vai ser apagado, tem a certeza?");
            if (confirmAction) {
                window.location.href = 'delete_record.php?id=' + id;
            }
        }
    </script>

</body>
</html>
