<?php 
    session_start();
    include_once './db/connection.php';

    if(isset($_POST['btn-clear'])):
    $sessionId = session_id();
        $sql = "DELETE FROM carrinho WHERE sessionId = '$sessionId'";

        if(mysqli_query($connect, $sql)):
            header('Location: ./carrinho.php?vazio');
        else:
            header('Location: ./carrinho.php?erro-ao-limpar');
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
    <title>Carrinho - Essa é a Loja | Produtos Geeks</title>

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
                        <a href="./home.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./produtos.php">Produtos</a>
                        <span>Carrinho</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Imagem</th>
                                    <th class="p-name">Nome do Produto</th>
                                    <th>Preço</th>
                                    <th>Quantidade</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                <tr>
                                    <td class="cart-pic first-row"><?php echo '<img src="./img/'.$content['img'].'" alt="'.$content['name'].'">'; ?></td>
                                    <td class="cart-title first-row">
                                        <h5><?php echo $content['category']; ?> - <?php echo $content['name']; ?></h5>
                                    </td>
                                    <td class="p-price first-row">R$ <?php echo $content['unitPrice']; ?></td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <?php echo $content['quantity']; ?>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">R$ <?php echo $content['quantity'] * $content['unitPrice']; ?></td>
                                </tr>
                                <?php 
		                            endwhile;
                                        endif;
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <form method='POST'>
                                    <button type='submit' class="primary-btn continue-shop" name='btn-clear'>Limpar carrinho</button>
                                </form>
                            </div>
                            <div class="discount-coupon">
                                <h6>Frete grátis acima de R$ 99</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="cart-total">Total <span>R$ <?php echo $total; ?></span></li>
                                </ul>
                                <a href="./finalizar-compra.php" class="proceed-btn">Finalizar Compra</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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