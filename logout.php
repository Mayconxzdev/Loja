<?php
session_start(); // Inicia uma nova sessão ou retoma a sessão existente

include('config.php'); // Inclui o arquivo de conexão com o banco de dados

// Registra log de logout
registrar_log($pdo, $_SESSION["email"], 'Logout');

unset($_SESSION["email"]); // Remove o email da sessão
unset($_SESSION["nome"]); // Remove o nome da sessão

session_destroy(); // Destrói a sessão, removendo todas as variáveis de sessão

// Redireciona para a página de login "index.php"
header("Location: index.php");
exit(); // Garante que o script termine após o redirecionamento
?>