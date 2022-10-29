<?php
require_once './db/connection.php';

session_start();

if(isset($_POST['login_btn'])):
	$errors = array();
	$email = mysqli_escape_string($connect, $_POST['email']);
	$password = mysqli_escape_string($connect, $_POST['password']);

	if(empty($email) or empty($password)):
		$errors[] = '<div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Login Inválido!</strong> Todos os campos devem ser preenchidos.
      </div>';
	else:
		$sql = "SELECT email FROM cliente WHERE email = '$email'";
		$resultado = mysqli_query($connect, $sql);		

		if(mysqli_num_rows($resultado) > 0):      
		$sql = "SELECT * FROM cliente WHERE email = '$email' AND password = '$password'";

		$resultado = mysqli_query($connect, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['isLogged'] = true;
				$_SESSION['userId'] = $dados['id'];
				$_SESSION['userName'] = $dados['name'];
				header('Location: index.php');
			else:
				$errors[] = '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Login Inválido!</strong> E-mail e senha não conferem.
              </div>';
			endif;

		else:
			$errors[] = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>E-mail Inválido!</strong> E-mail inexistente.
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
    <title>Login - Essa é a Loja | Produtos Geeks</title>

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
                        <span>Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Login Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Login</h2>
                        <?php 
                            if(!empty($errors)):
                            foreach($errors as $error):
                                echo $error;
                            endforeach;
                            endif;
                        ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
                            <div class="group-input">
                                <label for="email">E-mail *</label>
                                <input type="text" id="email" name="email">
                            </div>
                            <div class="group-input">
                                <label for="password">Senha *</label>
                                <input type="text" id="password" name="password">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <a href="./redefinir-senha.html" class="forget-pass">Esqueci a senha</a>
                                </div>
                            </div>
                            <div class="alert-message"></div>
                            <button type="submit" name='login_btn' class="site-btn login-btn">Entrar</button>
                        </form>
                        <div class="switch-login">
                            <a href="./cadastro.html" class="or-login">Ou Crie uma Conta</a>
                        </div>
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
        const formValidator = () => {
            const div = document.querySelector('.alert-message')

            const validRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (pass.value.length < 6) {
                div.innerHTML = `<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Senha inválida!</strong> Por favor, digite uma senha válida.
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