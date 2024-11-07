<?php
session_start(); // Inicia uma nova sessão ou resume a sessão existente

// Verifica se os campos "usuario" e "senha" estão preenchidos no formulário
if (empty($_POST["usuario"]) || empty($_POST["senha"])) {
    // Redireciona para a página "index.php" se os campos estiverem vazios
    echo "<script>location.href='index.php';</script>";
    exit(); // Termina a execução do script
}

include('config.php'); // Inclui o arquivo de conexão com o banco de dados

$email = $_POST["usuario"]; // Obtém o valor do campo "usuario" do formulário
$senha = $_POST["senha"]; // Obtém o valor do campo "senha" do formulário

// Prepara a query SQL para buscar o usuário pelo email
$sql = "SELECT * FROM tblcadastro WHERE email = ?";
$stmt = $pdo->prepare($sql); // Prepara a query
$stmt->execute([$email]); // Executa a query passando o email como parâmetro
$row = $stmt->fetch(PDO::FETCH_OBJ); // Busca o resultado da query como um objeto

// Verifica se o usuário existe e se a senha está correta
if ($row && password_verify($senha, $row->senha)) {
    $_SESSION["email"] = $email; // Armazena o email na sessão
    $_SESSION["nome"] = $row->nome; // Armazena o nome na sessão
    $_SESSION["login_sucesso"] = true; // Flag para indicar login bem-sucedido

    // Registra log de login bem-sucedido
    registrar_log($pdo, $email, 'Login bem-sucedido');

    // Redireciona para a página "dashboard.php"
    echo "<script>location.href='dashboard.php';</script>";
} else {
    // Registra log de falha de login
    registrar_log($pdo, $email, 'Tentativa de login falhou');

    // Exibe uma mensagem de erro e redireciona para "minha-conta.php" se a autenticação falhar
    echo "<script>alert('Usuario e/ou senha incorreto(s)');</script>";
    echo "<script>location.href='minha-conta.php';</script>";
}
?>