<?php
                $host = 'localhost';
                $user = 'rd';
                $pass = 'rd';
                $db = 'quickphone';

                $conn = new mysqli($host, $user, $pass, $db);

                if ($conn->connect_error) {
                    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
                }
