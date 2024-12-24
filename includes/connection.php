<!-- Coneção a base de dados --->
<?php
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'assistencia_telemoveis';

                $conn = new mysqli($host, $user, $pass, $db);

                if ($conn->connect_error) {
                    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
                }