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
    <title>Essa é a Loja | Produtos Geeks</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="./css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="./css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <?php include_once('./header.php') ?>

    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Busca</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Product Shop Section Begin -->
     <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-1 order-lg-2 mb-4">
                  <h3>Exibindo resultados para <b>"<?php echo $_SESSION['termo']; ?>"</b></h3>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                            <?php
                                $termo = $_SESSION['termo'];
                                $sql = "SELECT * FROM produtos WHERE name LIKE '%$termo%'";
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
                                                <li class="quick-view w-icon active"><a href="./produtos/detalhes.php?id=<?php echo $data['id']; ?>">+
                                                        Ver Mais</a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name"><?php echo $data['category'] ?></div>
                                            <a href="./produtos/detalhes.php?id=<?php echo $data['id']; ?>">
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