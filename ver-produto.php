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

                <img src="img/menu.png" alt="" class="menu-celular" onclick="menucelular()">
            </div>
            <!--FIM NAVBAR-->


        </div>
        <!--FIM CONTAINER-->
    </div>
    <!--FIM BANNER-->
    <!--INICIO PRODUTOS DETALHES-->
    <div class="corpo-categorias ver-produto">
        <div class="linha">
            <div class="col-2">
                <img src="img/galeria-1.jpg" alt="" id="produtoImg">

                <!--INICIO LINHA DA GALERIA-->
                <div class="img-linha">
                    <!--INICIO ITEM GALERIA-->
                    <div class="img-col">
                        <img src="img/galeria-1.jpg" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!--FIM ITEM GALERIA-->

                    <!--INICIO ITEM GALERIA-->
                    <div class="img-col">
                        <img src="img/galeria-2.jpg" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!--FIM ITEM GALERIA-->

                    <!--INICIO ITEM GALERIA-->
                    <div class="img-col">
                        <img src="img/galeria-3.jpg" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!--FIM ITEM GALERIA-->

                    <!--INICIO ITEM GALERIA-->
                    <div class="img-col">
                        <img src="img/galeria-4.jpg" alt="" width="100%" class="produtoMiniatura">
                    </div>
                    <!--FIM ITEM GALERIA-->
                </div>
                <!--FIM LINHA DA GALERIA-->


            </div>
            <div class="col-2">
                <p>Blusa de frio manga longa meletinho</p>
                <h1>Compre com desconto</h1>
                <h4>R$ 777</h4>
                <form action="" method="post">
                    <select name="" id="">
                        <option value="">Selecione o Tamanho</option>
                        <option value="">P</option>
                        <option value="">M</option>
                        <option value="">G</option>
                        <option value="">XG</option>
                        <option value="">XXG</option>
                    </select>

                    <input type="number" name="" id="" value="1">
                    <button type="submit" class="btn">Adicionar ao Carrinho</button>
                </form>
                <h3>Descrição:</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's</p>
            </div>
        </div>
    </div>
    <!--FIM PRODUTOS DETALHES-->


    <!--INICIO PRODUTOS DESTAQUE-->
    <div class="corpo-categorias">

        <div class="linha linha2">
            <h2>
                Produtos relacionados
            </h2>
            <p>Veja Mais</p>

        </div>

        <!--INICIO LINHA PRODUTOS-->
        <div class="linha">

            <!--INICIO ITEM PRODUTOS-->

            <div class="col-4">
                <img src="img/produto-9.jpg" alt="" />
                <h4>Curso cobranças</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 997,90</p>
            </div>
            <!--FIM ITEM PRODUTOS-->

            <!--INICIO ITEM PRODUTOS-->
            <div class="col-4">
                <img src="img/produto-10.jpg" alt="" />
                <h4>Curso cobranças</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 997,90</p>
            </div>
            <!--FIM ITEM PRODUTOS-->

            <!--INICIO ITEM PRODUTOS-->
            <div class="col-4">
                <img src="img/produto-11.jpg" alt="" />
                <h4>Curso cobranças</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 997,90</p>
            </div>
            <!--FIM ITEM PRODUTOS-->

            <!--INICIO ITEM PRODUTOS-->
            <div class="col-4">
                <img src="img/produto-12.jpg" alt="" />
                <h4>Curso cobranças</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>R$ 997,90</p>
            </div>
            <!--FIM ITEM PRODUTOS-->
        </div>
        <!--FIM LINHA PRODUTOS-->






    </div>

    </div>

    </div>




    <!--INICIO RODAPE-->
    <footer class="rodape">
        <div class="container">
            <div class="linha">
                <div class="rodape-col-1">
                    <h3>Baixe o nosso app</h3>
                    <p>Baixe nosso aplicativo nas melhores plataformas.</p>
                    <div class="app-logo">
                        <img src="img/google.png" alt="">
                        <img src="img/apple.png" alt="">
                    </div>
                </div>

                <div class="rodape-col-2">
                    <!--<img src="img/logo-2.png" alt="">-->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's</p>
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
        <hr>
        <p class="direitos">&#169; Todos os direitos reservados</p>
    </footer>
    <!--FIM RODAPE-->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/app.js"></script>
</body>

</html>