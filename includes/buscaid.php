<?php
            // Obtém o ID do modelo passado no URL
            $idmodelo = isset($_GET['idmodelo']) ? intval($_GET['idmodelo']) : 0;
            $id = isset($_GET['id']) ? intval($_GET['id']) : 0;


            // Função para buscar o nome de cada modelo com base no id
            function obterNomeModelo1($conn, $id) {
                $sql = "SELECT nome FROM componentes WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                return $row ? $row['nome'] : "Modelo não encontrado"; // Retorna o nome ou uma mensagem padrão
                
            }
            // Função para buscar o preço de cada reparação com base no id
            function obterPreco1($conn, $id) {
                $sql = "SELECT preco FROM componentes WHERE id = ? ";
                $stmt = $conn->prepare($sql); // Prepara a query SQL
                $stmt->bind_param("i", $id); // Liga os parâmetros à query
                $stmt->execute(); // Executa a query
                $result = $stmt->get_result(); // Obtém os resultados
                $row = $result->fetch_assoc(); // Obtém a linha de resultados
                return $row ? $row['preco'] : "Preço não disponível"; // Retorna o preço ou uma mensagem
            }

            // Função para buscar o tipo de reparação de cada reparação com base no id
            function obterReparacao($conn, $id) {
                $sql = "SELECT tiporeparacao FROM componentes WHERE id = ? ";
                $stmt = $conn->prepare($sql); // Prepara a query SQL
                $stmt->bind_param("i", $id); // Liga os parâmetros à query
                $stmt->execute(); // Executa a query
                $result = $stmt->get_result(); // Obtém os resultados
                $row = $result->fetch_assoc(); // Obtém a linha de resultados
                return $row ? $row['tiporeparacao'] : "Tipo de Reparação não disponível"; // Retorna o Tipo de Reparação ou uma mensagem
            }
            // Função para buscar o nome de cada modelo 
            function obterNomeModelo($conn, $idmodelo) {
                $sql = "SELECT nome FROM componentes WHERE idmodelo = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $idmodelo);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                return $row ? $row['nome'] : "Modelo não encontrado"; // Retorna o nome ou uma mensagem padrão
            }

            
            function obterid($conn, $idmodelo, $tiporeparacao) {
                $sql = "SELECT id FROM componentes WHERE idmodelo = ? AND tiporeparacao = ? ";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("is", $idmodelo , $tiporeparacao);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                return $row ? $row['id'] : "Modelo não encontrado"; // Retorna o nome ou uma mensagem padrão
            }
            
            // Função para buscar o preço de cada reparação com base no modelo e tipo de reparação
            function obterPreco($conn, $idmodelo, $tiporeparacao) {
                $sql = "SELECT preco FROM componentes WHERE idmodelo = ? AND tiporeparacao = ?";
                $stmt = $conn->prepare($sql); // Prepara a query SQL
                $stmt->bind_param("is", $idmodelo, $tiporeparacao); // Liga os parâmetros à query
                $stmt->execute(); // Executa a query
                $result = $stmt->get_result(); // Obtém os resultados
                $row = $result->fetch_assoc(); // Obtém a linha de resultados
                return $row ? $row['preco'] : "Preço não disponível"; // Retorna o preço ou uma mensagem
            }

            // Busca os preços na base de dados para cada reparação
            $precoBateria = obterPreco($conn, $idmodelo, 'Bateria');
            $precoCameraFrontal = obterPreco($conn, $idmodelo, 'CameraFrontal');
            $precoCameraTraseira = obterPreco($conn, $idmodelo, 'CameraTraseira');
            $precoVidroEcra = obterPreco($conn, $idmodelo, 'VidroEcra');
            $precoBotaoPower = obterPreco($conn, $idmodelo, 'BotaoPower');
            $precoConectorCarga = obterPreco($conn, $idmodelo, 'ConectorCarga');
            

            $nomeModelo = obterNomeModelo($conn, $idmodelo);

           
            

            // Busca os preços na base de dados para cada reparação
            $idBateria = obterid($conn, $idmodelo, 'Bateria');
            $idCameraFrontal = obterid($conn, $idmodelo, 'CameraFrontal');
            $idCameraTraseira = obterid($conn, $idmodelo, 'CameraTraseira');
            $idVidroEcra = obterid($conn, $idmodelo, 'VidroEcra');
            $idBotaoPower = obterid($conn, $idmodelo, 'BotaoPower');
            $idConectorCarga = obterid($conn, $idmodelo, 'ConectorCarga');
        

            ?>