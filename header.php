<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Dashboard</title>
</head>

<body>
    <!--INICIO BANNER-->
    <div class="banner">
        <!--INICIO CONTAINER-->
        <div class="container">
            <!--INICIO NAVBAR-->
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"> <img src="" alt="logo" width="125px" /></a>
                </div>
                <!--INICIO MENU TOPO-->
                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.php" title="">Inicio</a></li>
                        <li><a href="produtos.php" title="">Produtos</a></li>
                        <li><a href="consultar.php" title="">Consultar</a></li>
                        <li><a href="contatos.php" title="">Contatos</a></li>
                        <li><a href="minha-conta.php" title="">Minha Conta</a></li>
                        <li><a href="registro.php">Registro</a></li>
                        <li><a href="dashboard.php">Dashboard</a></li>
                    </ul>
                </nav>
                <!--FIM MENU TOPO-->
                <a href="carrinho.php" title>
                    <img src="img/carrinho2.png" alt="" width="30px" height="30px" /></a>
                <img src="img/menu.png" alt="" class="menu-celular" onclick="menucelular()">
            </div>
            <!--FIM NAVBAR-->
        </div>
        <!--FIM CONTAINER-->
    </div>
    <!--FIM BANNER-->