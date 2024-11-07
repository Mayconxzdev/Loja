<?php
session_start();
require("config.php"); // Conecta ao banco de dados

// Verifica se o formulário foi enviado com o método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha

    // Verifica se o email já está cadastrado
    $checkEmailQuery = "SELECT * FROM tblcadastro WHERE email = :email";
    $stmt = $pdo->prepare($checkEmailQuery);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION["cadastro_erro"] = "Email já está sendo utilizado!";
        header("Location: minha-conta.php?criado=erro");
        exit();
    } else {
        // Prepara a query SQL para inserir os dados na tabela tblcadastro
        $query = "INSERT INTO tblcadastro (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($query);

        // Vincula os parâmetros da query com os valores do formulário
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        // Executa a query para inserir os dados no banco de dados
        if ($stmt->execute()) {
            $_SESSION["cadastro_sucesso"] = true; // Define a variável de sessão
            // Redireciona para a página "minha-conta.php" com um parâmetro de sucesso
            header("Location: minha-conta.php?criado=sucesso");
        } else {
            // Em caso de erro, redireciona com um parâmetro de erro
            $_SESSION["cadastro_erro"] = "Erro ao criar conta!";
            header("Location: minha-conta.php?criado=erro");
        }
        exit(); // Termina o script
    }
}
?>