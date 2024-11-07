<?php
// Definição das credenciais de conexão com o banco de dados
$usuario = 'root';
$senha = '';
$dbname = 'siscadastro';
$host = 'localhost:3308';

// Tentativa de conexão ao banco de dados usando PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
    // Definindo o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Em caso de erro, exibir uma mensagem
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

// Função para registrar logs no banco de dados
function registrar_log($pdo, $usuario, $acao) {
    $query = "INSERT INTO logs (usuario, acao) VALUES (:usuario, :acao)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':acao', $acao);
    $stmt->execute();
}
?>