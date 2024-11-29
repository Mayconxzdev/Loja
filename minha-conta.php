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
                <!--INICIO MENU TOPO-->
                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.php" title="">Inicio</a></li>
                        <li><a href="produtos.php" title="">Produtos</a></li>
                        <li><a href="consultar.php" title="">Consultar</a></li>
                        <li><a href="" title="">Contatos</a></li>
                        <li><a href="minha-conta.php" title="">Minha Conta</a></li>
                    </ul>
                </nav>
                <!--FIM MENU TOPO-->
                <a href="carrinho.php" title>
                    <img src="img/carrinho2.png" alt="" width="30px" height="30px" />
                </a>
                <img src="img/menu.png" alt="" class="menu-celular" onclick="menucelular()" />
            </div>
            <!--FIM NAVBAR-->
        </div>
        <!--FIM CONTAINER-->
    </div>
    <!--FIM BANNER-->
    <!--INICIO MINHA CONTA-->
    <div class="minha-conta">
        <div class="container">
            <div class="linha">
                <div class="col-2">
                    <img src="img/banner-1.png" alt="" width="100%" />
                </div>
                <div class="col-2">
                    <div class="formulario">
                        <div class="btn-form">
                            <span onclick="Entrar()">Entrar</span>
                            <span onclick="Cadastro()">Cadastro</span>
                            <hr id="Indicador" />
                        </div>
                        <form action="login.php" method="POST" id="EntrarPainel">
                            <input type="text" name="usuario" id="" placeholder="Digite seu email" />
                            <input type="password" name="senha" id="" placeholder="Digite sua senha" />
                            <button type="submit" name="senEntrar" class="btn">
                                Entrar
                            </button>
                            <a href="" title="">Esqueceu sua senha?</a>
                        </form>
                        <form action="cria_usuario.php" method="POST" id="CadastroSite">
                            <input type="text" name="nome" id="" placeholder="Nome completo" required />
                            <input type="email" name="email" id="" placeholder="E-mail de acesso" required />
                            <input type="password" name="senha" id="" placeholder="Digite sua senha" required />
                            <button type="submit" name="sendCard" class="btn">Cadastre-se</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIM MINHA CONTA-->
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
                    <h3>Redes Sociais</ch>
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
    <script src="js/login.js"></script>
    <script>
    // Função para mostrar alerta se o cadastro foi bem-sucedido ou houve erro
    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('criado')) {
            const status = urlParams.get('criado');
            if (status === 'sucesso') {
                alert('Cadastro realizado com sucesso!');
                setTimeout(() => {
                    window.location.href = 'minha-conta.php'; // Redireciona para minha-conta.php
                }, 2000); // 2 segundos de atraso
            } else if (status === 'erro') {
                const erroMensagem =
                    <?php echo json_encode($_SESSION["cadastro_erro"] ?? "Houve um erro ao realizar o cadastro. Tente outro e-mail."); ?>;
                alert(erroMensagem);
                setTimeout(() => {
                    window.location.href = 'minha-conta.php'; // Redireciona para minha-conta.php
                }, 0.1); // 2 segundos de atraso
            }
        }
    };
    </script>
</body>

</html>