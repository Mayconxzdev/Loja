<?php
session_start();
require('config.php');



// Trata a solicitação POST para criar ou atualizar um registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $acao = $_POST['acao'];
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    if ($acao == 'create') {
        $query = "INSERT INTO tblcadastro (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        $_SESSION["mensagem"] = "Usuário cadastrado com sucesso!";
    } elseif ($acao == 'update') {
        $query = "UPDATE tblcadastro SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        $_SESSION["mensagem"] = "Usuário atualizado com sucesso!";
    }
    header("Location: registro.php");
    exit();
}

// Trata a solicitação GET para deletar um registro
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['acao']) && $_GET['acao'] == 'delete') {
    $id = $_GET['id'];
    $query = "DELETE FROM tblcadastro WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $_SESSION["mensagem"] = "Usuário deletado com sucesso!";
    header("Location: registro.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuários</title>
    <style>
    /* Estilo para a página de registro */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 30px auto;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    h1,
    h2 {
        text-align: center;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-bottom: 20px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        width: 100%;
    }

    button[type="submit"],
    button[type="button"],
    .link-voltar {
        padding: 10px 20px;
        background-color: #5c85d6;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        text-decoration: none;
        text-align: center;
    }

    button[type="submit"]:hover,
    button[type="button"]:hover,
    .link-voltar:hover {
        background-color: #4a74c1;
    }

    .table-container {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #5c85d6;
        color: #fff;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    .mensagem {
        padding: 10px;
        margin-bottom: 20px;
        background-color: #dff0d8;
        color: #3c763d;
        border: 1px solid #d6e9c6;
        border-radius: 5px;
        text-align: center;
    }

    .voltar-container {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .btn-voltar {
        display: block;
        width: 200px;
        margin: 20px auto;
        padding: 10px;
        text-align: center;
        background-color: #5c85d6;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-voltar:hover {
        background-color: #4a74c1;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Registro de Usuários</h1>

        <?php if (isset($_SESSION["mensagem"])): ?>
        <div class="mensagem">
            <?php
                echo $_SESSION["mensagem"];
                unset($_SESSION["mensagem"]);
                ?>
        </div>
        <?php endif; ?>
        <form id="formRegistro" method="POST" action="registro.php">
            <input type="hidden" name="id" id="id">
            <input type="text" name="nome" id="nome" placeholder="Nome" required>
            <input type="email" name="email" id="email" placeholder="E-mail" required>
            <input type="password" name="senha" id="senha" placeholder="Senha" required>
            <button type="submit" name="acao" value="create">Cadastrar</button>
            <button type="submit" name="acao" value="update">Atualizar</button>
            <button type="button" onclick="deleteUser()">Deletar</button>
        </form>

        <h2>Usuários Registrados</h2>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="listaUsuarios">
                    <?php
                    $sql = "SELECT * FROM tblcadastro";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach ($usuarios as $usuario) {
                        echo "<tr>";
                        echo "<td>{$usuario->id}</td>";
                        echo "<td>{$usuario->nome}</td>";
                        echo "<td>{$usuario->email}</td>";
                        echo "<td>
                                <button onclick='editUser({$usuario->id}, \"{$usuario->nome}\", \"{$usuario->email}\")'>Editar</button>
                                <button onclick='confirmDelete({$usuario->id})'>Deletar</button>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <a href="minha-conta.php" class="btn-voltar">Voltar para Minha Conta</a>
    </div>
    <script>
    function editUser(id, nome, email) {
        document.getElementById('id').value = id;
        document.getElementById('nome').value = nome;
        document.getElementById('email').value = email;
    }

    function confirmDelete(id) {
        if (confirm("Tem certeza que deseja deletar este usuário?")) {
            window.location.href = `registro.php?acao=delete&id=${id}`;
        }
    }

    function deleteUser() {
        const id = document.getElementById('id').value;
        if (id) {
            confirmDelete(id);
        } else {
            alert("Selecione um usuário para deletar.");
        }
    }
    </script>
</body>

</html>