<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sobre nós - Essa é a Loja | Produtos Geeks</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php include_once('./header.php') ?>

    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Sobre nós</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2>Essa é a Loja - Produtos Geeks</h2>
                            <p>Nossa História</p>
                        </div>
                        <div class="blog-detail-desc">
                            <p>Nossa loja nasceu em Setembro de 2017 com o intuito de aproximar os fãs do mundo geek de
                                seus desenhos, séries e filmes favoritos. Atualmente contamos com mais de 3 mil
                                clientes, 10 fornecedores e uma transportadora própria para entregar os pedidos o mais
                                rápido possível.
                                Nós prezamos sempre pela transparência e preocupação com o cliente, por isso entregamos
                                uma alta qualidade desde o início da sua compra até o fim dela.
                            </p>
                        </div>
                        <p>Nossa equipe é formada por mais de 20 pessoas prontas para te ajudar com o que precisar. Além
                            da forte presença on-line, possuimos uma loja física em São Paulo, nela oferecemos uma
                            experiência imersiva no mundo geek.</p>
                        <div class="leave-comment">
                            <h4>Entre em contato conosco</h4>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Nome" id="user">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="E-mail" id="email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Mensagem" id="msg"></textarea>
                                        <div class="alert-message"></div>
                                        <input style="color: white" type="button" class="site-btn" value="Enviar"
                                            onclick="formValidator()">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
        include_once('brands.php');
        include_once('footer.php'); 
    ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        const formValidator = () => {
            const div = document.querySelector('.alert-message')

            const validRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            console.log(user.value)
            console.log(email.value)
            console.log(msg.value)
            if (user.value.length === 0 || msg.value.length === 0) {
                div.innerHTML = `<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Campo vazio!</strong> Por favor, preencha todos os campos.
              </div>`
            } else {
                div.innerHTML = ''
            }

            if (!email.value.match(validRegex)) {
                div.innerHTML = `<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>E-mail Inválido!</strong> Por favor, digite um e-mail válido.
  </div>`
            }
        }
    </script>
</body>

</html>