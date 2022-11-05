<?php 
    session_start();
    include_once './db/connection.php';
?>

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
                        <a href="./index.php">
                            <img class='logo' src="./img/logo.gif" alt="Essa é a Loja - Produtos Geeks" />
                        </a>
                    </div>
                </div>
                <div class="ht-right">
                    <?php
                        if(!isset($_SESSION['isLogged'])):
                    ?>
                    <a href="login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>

                    <?php
                        else:
                        $nome = $_SESSION['userName'];
                    ?>
                        <span>
                            <span class='login-panel'><?php echo $nome; ?></span> | <button style="border: 0; background: none;">sair</button>
                        </span>
                        
                    <?php
                        endif;
                    ?>

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
                                <a href="./index.php">
                                    <img class='logo' src="./img/logo.gif" alt="Essa é a Loja - Produtos Geeks" />
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
                                        <?php
                                                    $sessionId = session_id();
                                                    $sql = "SELECT c.*, p.name, p.category, p.img
                                                    FROM carrinho c INNER JOIN produtos p ON c.productId = p.id WHERE c.sessionId = '$sessionId'";
                                                    $result = mysqli_query($connect, $sql);

                                                    if(mysqli_num_rows($result) > 0):
                                                        $items = 0;
                                                        while($content = mysqli_fetch_array($result)):
                                                        $items++;
                                                        echo '<span>'.$items.'</span>';                 
                                                        
                                                        endwhile;                                     endif;   
                                        ?>
                                    </a>
                                    <div class="cart-hover">
                                        <div class="select-items">
                                            <table>
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
                                                        <td class="si-pic"><?php echo '<img src="./img/'.$content['img'].'" alt="'.$content['name'].'">'; ?></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>R$ <?php echo $content['quantity'] * $content['unitPrice']; ?> x <?php echo $content['quantity']; ?></p>
                                                                <h6><?php echo $content['category']; ?> - <?php echo $content['name']; ?></h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                <?php 
                                                    endwhile;
                                                        endif;
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            <h5>R$ <?php echo $total; ?></h5>
                                        </div>
                                        <div class="select-button">
                                            <a href="./carrinho.php" class="primary-btn view-card">Ver Carrinho</a>
                                            <a href="./finalizar-compra.php" class="primary-btn checkout-btn">Finalizar
                                                Compra</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-price">R$ <?php echo $total; ?></li>
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
                            <li><a href="./produtos/categoria.php?nome=Camiseta">Camisetas</a></li>
                            <li><a href="./produtos/categoria.php?nome=Funko Pop">Funkos</a></li>
                            <li><a href="./produtos/categoria.php?nome=Shorts">Shorts</a></li>
                            <li><a href="./produtos/categoria.php?nome=Chaveiro">Chaveiros</a></li>
                            <li><a href="./produtos/categoria.php?nome=Mousepad">Mousepads</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./produtos.php">Produtos</a></li>
                        <li><a href="./contato.php">Contato</a></li>
                        <li><a href="./sobre-nos.php">Sobre nós</a>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->