<?php 
    include_once './db/connection.php';
    session_start();


    if(isset($_POST['finalize'])):
        $sessionId = session_id();
            $sql = "DELETE FROM carrinho WHERE sessionId = '$sessionId'";
    
        if(mysqli_query($connect, $sql)):
            header('Location: ./index.php?compra-efetuada');
        else:
            header('Location: ./finalizar-compra.php?erro-ao-finalizar');
        endif;
    endif;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Essa é a Loja | Produtos Geeks">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout - Essa é a Loja | Produtos Geeks</title>

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
                    <div class="breadcrumb-text product-more">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./carrinho.php">Carrinho</a>
                        <span>Finalizar Compra</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="#" class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Endereço para Entrega</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="zip">CEP</label>
                                <input type="text" id="zip">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Endereço<span>*</span></label>
                                <input type="text" id="street" class="street-first">
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Cidade<span>*</span></label>
                                <input type="text" id="town">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Estado<span>*</span></label>
                                <input type="text" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="place-order">
                            <h4>Sua Compra</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Produto <span>Total</span></li>
                                    <?php
                                        $sessionId = session_id();
                                        $sql = "SELECT c.*, p.name, p.category, p.img
                                        FROM carrinho c INNER JOIN produtos p ON c.productId = p.id WHERE c.sessionId = '$sessionId'";
                                        $result = mysqli_query($connect, $sql);
                                        $quantity = 0;
                                        $total = 0;

                                        if(mysqli_num_rows($result) > 0):
                                            while($content = mysqli_fetch_array($result)):
                                                $quantity = $quantity + $content['quantity'];
                                                $total = ($total + $content['totalPrice']);
                                    ?>
                                    <li class="fw-normal"><?php echo $content['category']; ?> - <?php echo $content['name']; ?> x <?php echo $content['quantity']; ?> <span>R$ <?php echo $content['quantity'] * $content['unitPrice']; ?></span>
                                    </li>
                                    <?php 
		                                endwhile;
                                            endif;
                                    ?>
                                    <li class="total-price">Total <span>R$ <?php echo $total; ?></span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Cartão de Crédito
                                            <input type="checkbox" id="pc-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <form method='POST'>
                                        <button type="submit" class="site-btn place-btn" name='finalize'>Finalizar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

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