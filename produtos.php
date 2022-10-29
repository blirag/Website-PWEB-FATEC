<?php 
    include_once './db/connection.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Essa é a Loja | Produtos Geeks">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos - Essa é a Loja | Produtos Geeks</title>

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

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Produtos</span>
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
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categorias</h4>
                        <ul class="filter-catagories">
                            <li><a href="./produtos/categoria.php?nome=Camiseta">Camisetas</a></li>
                            <li><a href="./produtos/categoria.php?nome=Funko Pop">Funkos</a></li>
                            <li><a href="./produtos/categoria.php?nome=Shorts">Shorts</a></li>
                            <li><a href="./produtos/categoria.php?nome=Chaveiro">Chaveiros</a></li>
                            <li><a href="./produtos/categoria.php?nome=Mousepad">Mousepads</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Temas</h4>
                        <ul class="filter-catagories">
                            <li><a href="./produtos/tema.php?nome=Star Wars">Star Wars</a></li>
                            <li><a href="./produtos/tema.php?nome=Harry Potter">Harry Potter</a></li>
                            <li><a href="./produtos/tema.php?nome=Super Mario">Super Mario</a></li>
                            <li><a href="./produtos/tema.php?nome=Marvel">Marvel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                            <?php
                                $sql = "SELECT * FROM produtos";
                                $result = mysqli_query($connect, $sql);
                                    
                                if(mysqli_num_rows($result) > 0):
                                    while($data = mysqli_fetch_array($result)):
                            ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                        <?php echo '<img src="./img/'.$data['img'].'" class="img-fluid" alt="'.$data['name'].'">'; ?>
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
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

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