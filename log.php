<?php
session_start();
require('config.php');


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs de Atividades</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
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
        <h1>Logs de Atividades</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuário</th>
                    <th>Ação</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM logs ORDER BY data DESC";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $logs = $stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($logs as $log) {
                    echo "<tr>";
                    echo "<td>{$log->id}</td>";
                    echo "<td>{$log->usuario}</td>";
                    echo "<td>{$log->acao}</td>";
                    echo "<td>{$log->data}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="minha-conta.php" class="btn-voltar">Voltar para Minha Conta</a>
    </div>
</body>

</html>