<?php 
    include_once '../db/connection.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Essa é a Loja | Produtos Geeks">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Camisetas - Essa é a Loja | Produtos Geeks</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container container-mobile">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        produtosgeeks@essaealoja.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +55 (11) 99063-7422
                    </div>
                </div>
                <div class="ht-mobile-left">
                    <div class="logo">
                        <a href="../index.html">
                            <img class='logo' src="../img/logo.gif" alt="Essa é a Loja - Produtos Geeks" />
                        </a>
                    </div>
                </div>
                <div class="ht-right">
                    <a href="../login.html" class="login-panel"><i class="fa fa-user"></i>Login</a>

                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-header">
            <div class="container">
                <div class="inner-header">
                    <div class="row align-row">
                        <div class="col-lg-3 col-md-3 logo-container">
                            <div class="logo">
                                <a href="../index.html">
                                    <img class='logo' src="../img/logo.gif" alt="Essa é a Loja - Produtos Geeks" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 advanced-search-container">
                            <div class="advanced-search">
                                <div class="input-group">
                                    <input type="text" placeholder="O que você precisa?">
                                    <button type="button"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 text-right col-md-3 nav-right-container">
                            <ul class="nav-right">
                                <li class="heart-icon">
                                    <a href="#">
                                        <i class="icon_heart_alt"></i>
                                        <span>1</span>
                                    </a>
                                </li>
                                <li class="cart-icon">
                                    <a href="#">
                                        <i class="icon_bag_alt"></i>
                                        <span>3</span>
                                    </a>
                                    <div class="cart-hover">
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="si-pic"><img src="../img/funkos/hermione.jpg"
                                                                alt="funko pop hermione granger"></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>R$118,99 x 1</p>
                                                                <h6>Funko Pop - Hermione Granger</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="si-pic"><img
                                                                src="../img/camisetas/starwars-vader-preta.jpg" alt="">
                                                        </td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>R$39,90 x 1</p>
                                                                <h6>Camiseta Darth Vader</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            <h5>R$185,89</h5>
                                        </div>
                                        <div class="select-button">
                                            <a href="../carrinho.html" class="primary-btn view-card">Ver Carrinho</a>
                                            <a href="../finalizar-compra.html"
                                                class="primary-btn checkout-btn">Finalizar
                                                Compra</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-price">R$158,89</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Todos as Categorias</span>
                        <ul class="depart-hover">
                            <li><a href="./camisetas.html">Camisetas</a></li>
                            <li><a href="./funkos.html">Funkos</a></li>
                            <li><a href="./shorts.html">Shorts</a></li>
                            <li><a href="./chaveiros.html">Chaveiros</a></li>
                            <li><a href="./mousepads.html">Mousepads</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="../index.html">Home</a></li>
                        <li><a href="../produtos.html">Produtos</a></li>
                        <li><a href="../contato.html">Contato</a></li>
                        <li><a href="../sobre-nos.html">Sobre nós</a>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="../index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="../produtos.php">Produtos</a>
                        <span><?php echo $_GET['nome'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                            <?php
                                if(isset($_GET['nome'])):
                                    $categoryName = mysqli_escape_string($connect, $_GET['nome']);
                                
                                    $sql = "SELECT * FROM produtos WHERE category = '$categoryName'";
                                    $result = mysqli_query($connect, $sql);
                                    
                                    if(mysqli_num_rows($result) > 0):
                                        while($data = mysqli_fetch_array($result)):
                            ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                    <?php echo '<img src="../img/'.$data['img'].'" class="img-fluid" alt="'.$data['name'].'">'; ?>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="quick-view w-icon active"><a href="./detalhes.php?id=<?php echo $data['id']; ?>">+
                                                    Ver Mais</a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"><?php echo $data['category'] ?></div>
                                        <a href="./detalhes.php?id=<?php echo $data['id']; ?>">
                                            <h5><?php echo $data['name'] ?></h5>
                                        </a>
                                        <div class="product-price">
                                            R$ <?php echo $data['price'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                        endwhile;
                                    endif;
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="../img/logo-marvel.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="../img/logo-hp.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="../img/logo-nintendo.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="../img/logo-starwars.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="../img/logo-disney.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="../index.html"><img src="../img/logo.gif" alt=""></a>
                        </div>
                        <ul>
                            <li>Endereço: R. Frei João, 59 - Ipiranga</li>
                            <li>Celular: +55 (11) 99063-7422</li>
                            <li>E-mail: produtosgeeks@essaealoja.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Informações</h5>
                        <ul>
                            <li><a href="../sobre-nos.html">Sobre nós</a></li>
                            <li><a href="../produtos.html">Produtos</a></li>
                            <li><a href="../contato.html">Contato</a></li>
                            <li><a href="../faq.html">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Temas</h5>
                        <ul>
                            <li><a href="./harry-potter.html">Harry Potter</a></li>
                            <li><a href="./star-wars.html">Star Wars</a></li>
                            <li><a href="./marvel.html">Marvel</a></li>
                            <li><a href="./super-mario.html">Super Mario</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Se inscreva na nossa newsletter!</h5>
                        <p>Recebe todas as novidades no seu e-mail.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Digite seu e-mail">
                            <button type="button">Inscrever-se</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> Todos os direitos reservados |
                            Essa é a Loja
                        </div>
                        <div class="payment-pic">
                            <img src="../img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.zoom.min.js"></script>
    <script src="../js/jquery.dd.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>