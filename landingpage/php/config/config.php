<?php
    
    $server = "localhost";
    $user = "root";
    $password = ""; // Lembre-se de colocar uma senha, mesmo no ambiente local
    $dbname = "demo";
    
    // Conexão com o servidor MySQL e banco de dados
try {
    $link = new mysqli($server, $user, $password, $dbname);
    
        // Verifica se houve erro na conexão ao MySQL
    if ($link->connect_error) {
            throw new Exception("Connection failed: " . $link->connect_error);
        }
} catch (Exception $e) {
    // Em produção, logue o erro em vez de mostrá-lo ao usuário
    error_log($e->getMessage());
    die("Could not connect to the database.");
}

// O restante do código que depende da conexão deve ser colocado nos outros arquivos PHP, sem fechar a conexão aqui
