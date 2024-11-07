<!DOCTYPE html>
<html>

<head>
    <title>Consultar usuario</title>
    <style>
    :root {
        --cor-padrao: #665cbe;
        --cor-padrao-hover: #5c50ca;
        --cor-fonte: #fff;
        --cor-fonte-p: #555;
        --cor-btn: #563434;
        --cor-btn-hover: #00f;
        --cor-btn-fonte: #000;
        --cor-fonte-corpo: #555;
        --cor-fonte-corpo-leve: #777;
    }

    body {
        font-family: Arial, sans-serif;
        color: var(--cor-fonte-corpo);
        background-color: var(--cor-padrao);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        text-align: center;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: var(--cor-padrao);
    }

    form {
        margin-bottom: 20px;
    }

    input[type="text"] {
        padding: 10px;
        border: 1px solid var(--cor-padrao-hover);
        border-radius: 5px;
        width: 80%;
        margin-bottom: 10px;
    }

    button {
        background-color: var(--cor-btn);
        color: var(--cor-btn-fonte);
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: var(--cor-btn-hover);
        color: var(--cor-fonte);
    }

    .resultados {
        background-color: var(--cor-padrao-hover);
        padding: 10px;
        border-radius: 5px;
        color: var(--cor-fonte);
    }

    .bold-black {
        color: black;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Consultar Usuários</h1>
        <form method="post" action="">
            <label for="search" class="bold-black">Pesquisar:</label>
            <input type="text" id="search" name="search">
            <button type="submit">Buscar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST['search'];
            if (!empty($search)) {
                // Inclui a conexão com o banco de dados
                include 'config.php';

                // Consulta SQL com filtro
                $sql = "SELECT id, nome, email, data_criacao FROM tblcadastro WHERE nome LIKE :search OR email LIKE :search";
                $stmt = $pdo->prepare($sql);
                $search_param = "%" . $search . "%";
                $stmt->bindParam(':search', $search_param);
                $stmt->execute();
                $result = $stmt->fetchAll();

                if (count($result) > 0) {
                    echo '<div class="resultados">';
                    // Exibir os dados de cada linha
                    foreach ($result as $row) {
                        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Email: " . $row["email"] . " - Data de Criação: " . $row["data_criacao"] . "<br>";
                    }
                    echo '</div>';
                } else {
                    echo '<div class="resultados">0 resultados</div>';
                }
            } else {
                echo '<div class="resultados bold-black">Por favor, insira um nome ou email para busca.</div>';
            }
        }
        ?>
    </div>
</body>

</html>