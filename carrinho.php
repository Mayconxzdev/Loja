<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Loja</title>
</head>

<body>
    <!--INICIO BANNER-->
    <div class="novoMenu">
        <!--INICIO CONTAINER-->
        <div class="container">
            <!--INICIO NAVBAR-->
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"> <img src="" alt="logo" width="125px" /></a>
                </div>

                <!--INICIO MEUNU TOPO-->
                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.php" title="">Inicio</a></li>
                        <li><a href="produtos.php" title="">Produtos</a></li>
                        <li><a href="consultar.php" title="">Consultar</a></li>
                        <li><a href="" title="">Contatos</a></li>
                        <li><a href="minha-conta.php" title="">Minha Conta</a></li>
                    </ul>
                </nav>
                <!--FIM MEUNU TOPO-->

                <a href="carrinho.php" title>
                    <img src="img/carrinho2.png" alt="" width="30px" height="30px" /></a>

                <img src="img/menu.png" alt="" class="menu-celular" onclick="menucelular()" />
            </div>
            <!--FIM NAVBAR-->
        </div>
        <!--FIM CONTAINER-->
    </div>
    <!--FIM BANNER-->

    <!--INICIO CARRINHO-->
    <div class="corpo-categorias carrinho-compras">
        <!--INICIO TABELA-->
        <table>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
            <!--INICIO TABELA DO CARRINHO-->
            <tr>
                <td>
                    <div class="info-carrinho">
                        <img src="img/carrinho-1.jpg" alt="" />

                        <div>
                            <p>Curso loja Virtual</p>
                            <small>Valor: R$777</small>
                            <br />
                            <a href="" title="">Remover</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="number" name="" id="" value="1" />
                    </form>
                </td>
                <td>R$ 777</td>
            </tr>
            <!--FIM TABELA DO CARRINHO-->
            <!--INICIO TABELA DO CARRINHO-->
            <tr>
                <td>
                    <div class="info-carrinho">
                        <img src="img/carrinho-2.jpg" alt="" />

                        <div>
                            <p>Curso loja Virtual</p>
                            <small>Valor: R$777</small>
                            <br />
                            <a href="" title="">Remover</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="number" name="" id="" value="1" />
                    </form>
                </td>
                <td>R$ 777</td>
            </tr>
            <!--FIM TABELA DO CARRINHO-->
            <!--INICIO TABELA DO CARRINHO-->
            <tr>
                <td>
                    <div class="info-carrinho">
                        <img src="img/carrinho-3.jpg" alt="" />

                        <div>
                            <p>Curso loja Virtual</p>
                            <small>Valor: R$777</small>
                            <br />
                            <a href="" title="">Remover</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="number" name="" id="" value="1" />
                    </form>
                </td>
                <td>R$ 777</td>
            </tr>
            <!--FIM TABELA DO CARRINHO-->
        </table>
        <!--FIM TABELA-->

        <!--INICIO VALOR TOTAL-->
        <div class="valor-total">
            <table>
                <tr>
                    <td>Sub-total</td>
                    <td>R$ 700</td>
                </tr>

                <tr>
                    <td>Frete</td>
                    <td>R$ 77</td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>R$ 777</td>
                </tr>
            </table>
        </div>
        <!--FIM VALOR TOTAL-->
    </div>
    <!--FIM CARRINHO-->

    <!--INICIO RODAPE-->
    <footer class="rodape">
        <div class="container">
            <div class="linha">
                <div class="rodape-col-1">
                    <h3>Baixe o nosso app</h3>
                    <p>Baixe nosso aplicativo nas melhores plataformas.</p>
                    <div class="app-logo">
                        <img src="img/google.png" alt="" />
                        <img src="img/apple.png" alt="" />
                    </div>
                </div>

                <div class="rodape-col-2">
                    <img src="" alt="" />
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's
                    </p>
                </div>

                <div class="rodape-col-3">
                    <h3>Mais Informações</h3>
                    <ul>
                        <li>Cupons</li>
                        <li>Blog</li>
                        <li>Politica de Privacidade</li>
                        <li>Contatos</li>
                    </ul>
                </div>

                <div class="rodape-col-4">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                        <li>Twitter</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr />
        <p class="direitos">&#169; Todos os direitos reservados</p>
    </footer>
    <!--FIM RODAPE-->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/app.js"></script>
</body>

</html>