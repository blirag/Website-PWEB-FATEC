<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require './lib/vendor/autoload.php';

    require_once 'db/connection.php';
    session_start();


    if(isset($_POST['btn-forgot'])):
        $message = array();
        $email = mysqli_escape_string($connect, $_POST['email']);

        if(!preg_match('/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)):
            $message[] = '<div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>E-mail Inválido!</strong> Digite um e-mail válido.
                        </div>';
        else:
            $sql = "SELECT name, password FROM cliente WHERE email = '$email'";
            $result = mysqli_query($connect, $sql);
            
            if(mysqli_num_rows($result) == 1):
                $data = mysqli_fetch_array($result);
                mysqli_close($connect);

                $mail = new PHPMailer(true);
                $name = $data['name'];
                $password = $data['password'];

                try {
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.mailtrap.io';                   
                $mail->SMTPAuth = true;
                $mail->Port = 2525;
                $mail->Username = 'e528f05a9c02e5';
                $mail->Password = 'c4d15f6910670d';
                $mail->CharSet = "UTF-8";

                $mail->setFrom('produtosgeeks@essaealoja.com', 'Essa é a Loja');
                $mail->addAddress($email, $name);     

                $mail->isHTML(true);                              
                $mail->Subject = 'Recuperação de Senha';
                $mail->Body    = "Olá, $name </br></br> A senha da sua conta na <b>Essa é a Loja | Produtos Geeks</b> é: $password.";

                $mail->send();
                $message[] = '<div class="alert alert-success" role="alert">
                                E-mail enviado com sucesso!
                            </div>';
                } catch (Exception $e) {
                $message[] = '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Algo deu errado!</strong> Tente enviar novamente.
            </div>';
                }
            else:
                $message[] = '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Usuário inexistente!</strong> E-mail digitado não existe na nossa base de dados.
            </div>';
            endif;
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
    <title>Redefinir senha - Essa é a Loja | Produtos Geeks</title>

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
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Redefinir senha</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Forgot Password Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Redefinir senha</h2>
                        <?php 
                            if(!empty($message)):
                                foreach($message as $msg):
                                    echo $msg;
                                endforeach;
                            endif;
                        ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
                            <div class="group-input">
                                <label for="email">E-mail *</label>
                                <input type="text" id="email" name='email'>
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <a class="forget-pass">Um link para redefinir a senha
                                        será enviado para o e-mail.</a>
                                </div>
                            </div>
                            <div class="alert-message"></div>
                            <button class="site-btn login-btn" name='btn-forgot'>Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

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
        function emailValidator() {
            const validRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (email.value.match(validRegex)) {
                const div = document.querySelector('.alert-message')
                div.innerHTML = `<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>E-mail enviado!</strong> Acesse seu e-mail e clique no link para redefinir a senha.
  </div>`
            } else {
                const div = document.querySelector('.alert-message')
                div.innerHTML = `<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>E-mail Inválido!</strong> Por favor, digite um e-mail válido.
  </div>`
            }
        }
    </script>
</body>

</html>