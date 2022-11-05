<?php 
    include_once './db/connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Essa é a Loja | Produtos Geeks">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Essa é a Loja | Produtos Geeks</title>

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

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/hero-marvel.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Marvel</span>
                            <h1>Promoção</h1>
                            <p>Todos os produtos Marvel com descontos de até 50% e frete grátis acima de R$ 99.
                            </p>
                            <a href="./produtos/marvel.php" class="primary-btn"> Comprar agora</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>50% <span>off</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/hero-mario.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Super Mario</span>
                            <h1>Compre e Ganhe!</h1>
                            <p>Na compra de qualquer item da categoria Super Mario ganhe um chaveiro de brinde.</p>
                            <a href="./produtos/super-mario.php" class="primary-btn">Comprar agora</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>oferta<span>brinde</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <a href="./produtos/categoria.php?nome=Camiseta">
                        <div class="single-banner">
                            <div class="category-bg"></div>
                            <div class="inner-text">
                                <h4>Camisetas</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="./produtos/categoria.php?nome=Funko Pop">
                        <div class="single-banner">
                            <div class="category-bg"></div>
                            <div class="inner-text">
                                <h4>Funko Pop</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="./produtos/categoria.php?nome=Shorts">
                        <div class="single-banner">
                            <div class="category-bg"></div>
                            <div class="inner-text">
                                <h4>Shorts</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/hp-vertical.jpg">
                        <h2>Harry Potter</h2>
                        <a href="./produtos/harry-potter.php">Veja Mais</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Harry Potter</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                    <?php
                        $sql = "SELECT * FROM produtos WHERE theme='Harry Potter'";
                        $result = mysqli_query($connect, $sql);
                    
                        if(mysqli_num_rows($result) > 0):
                                while($data = mysqli_fetch_array($result)):
				    ?>
                        <div class="product-item">
                            <div class="pi-pic">
                                <?php echo '<img src="./img/'.$data['img'].'" class="img-fluid" alt="'.$data['name'].'">'; ?>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="quick-view w-icon active"><a
                                            href="./produtos/detalhes.php?id=<?php echo $data['id']; ?>">+ Ver Mais</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name"><?php echo $data['category']; ?></div>
                                <a href=href="./produtos/detalhes.php?id=<?php echo $data['id']; ?>">
                                    <h5><?php echo $data['name']; ?></h5>
                                </a>
                                <div class="product-price">
                                    R$ <?php echo $data['price']; ?>
                                </div>
                            </div>
                        </div>
                    <?php 
				            endwhile;
                        endif; 
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Star Wars</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <?php
                            $sql = "SELECT * FROM produtos WHERE theme='Star Wars'";
                            $result = mysqli_query($connect, $sql);
                        
                            if(mysqli_num_rows($result) > 0):
                                    while($data = mysqli_fetch_array($result)):
                        ?>
                            <div class="product-item">
                                <div class="pi-pic">
                                    <?php echo '<img src="./img/'.$data['img'].'" class="img-fluid" alt="'.$data['name'].'">'; ?>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="quick-view w-icon active"><a
                                                href="./produtos/detalhes.php?id=<?php echo $data['id']; ?>">+ Ver Mais</a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"><?php echo $data['category']; ?></div>
                                    <a href=href="./produtos/detalhes.php?id=<?php echo $data['id']; ?>">
                                        <h5><?php echo $data['name']; ?></h5>
                                    </a>
                                    <div class="product-price">
                                        R$ <?php echo $data['price']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php 
                                endwhile;
                            endif; 
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/starwars-vertical.webp">
                        <h2>Star Wars</h2>
                        <a href="./produtos/star-wars.php">Veja Mais</a>
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
</body>

</html>