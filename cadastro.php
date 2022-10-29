<?php
require_once 'db/connection.php';

if(isset($_POST['register_btn'])):
	$nome = $_POST['username'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$conpass = $_POST['conpass'];

	$sql = "INSERT INTO cliente (name, cpf, email, password) VALUES ('$name', '$cpf', '$email', '$pass')";

	if(mysqli_query($connect, $sql)):
		header('Location: ../entrar.php?sucesso');
	else:
		header('Location: ../cadastro.php?erro-ao-cadastrar');
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
    <title>Cadastro - Essa é a Loja | Produtos Geeks</title>

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
                        <span>Cadastro</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Cadastro</h2>
                        <form action="cadastro.php" method='POST'>
                            <div class="group-input">
                                <label for="username">Nome *</label>
                                <input type="text" id="username" required>
                            </div>
                            <div class="group-input">
                                <label for="cpf">CPF (somente números)*</label>
                                <input type="text" id="cpf" required>
                            </div>
                            <div class="group-input">
                                <label for="email">E-mail *</label>
                                <input type="text" id="email" required>
                            </div>
                            <div class="group-input">
                                <label for="pass">Senha *</label>
                                <input type="text" id="pass" required>
                            </div>
                            <div class="group-input">
                                <label for="conpass">Confirmar Senha *</label>
                                <input type="text" id="conpass" required>
                            </div>
                            <div class="alert-message"></div>
                            <input type='button' value='Cadastrar' name='register_btn' class="site-btn register-btn"
                                onclick="registerValidator()">
                        </form>
                        <div class="switch-login">
                            <a href="./login.html" class="or-login">Ou Login</a>
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
        const div = document.querySelector('.alert-message')

        const passwordValidator = (pass, confPass) => {
            if (pass.length < 6) {
                const div = document.querySelector('.alert-message')
                div.innerHTML = `<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Senha Inválida!</strong> A senha deve conter no mínimo 6 caracteres.
  </div>`
            } else {
                if (confPass !== pass) {
                    const div = document.querySelector('.alert-message')
                    div.innerHTML = `<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Senhas não coincidem!</strong> As duas senhas devem ser iguais.
  </div>`
                }
            }
        }

        const emailValidator = (email) => {
            const validRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (!email.match(validRegex)) {
                const div = document.querySelector('.alert-message')
                div.innerHTML = `<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>E-mail Inválido!</strong> Por favor, digite um e-mail válido.
  </div>`
            }
        }

        const cpfValidator = (cpf) => {
            let sum = 0, res;
            if (cpf == "00000000000") {
                div.innerHTML = `<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>CPF Inválido!</strong> Por favor, digite um CPF válido.
  </div>`
            };

            for (i = 1; i <= 9; i++) sum = sum + parseInt(cpf.substring(i - 1, i)) * (11 - i);
            res = (sum * 10) % 11;

            if ((res == 10) || (res == 11)) res = 0;
            if (res != parseInt(cpf.substring(9, 10))) {
                div.innerHTML = `<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>CPF Inválido!</strong> Por favor, digite um CPF válido.
  </div>`
            };

            sum = 0;
            for (i = 1; i <= 10; i++) sum = sum + parseInt(cpf.substring(i - 1, i)) * (12 - i);
            res = (sum * 10) % 11;

            if ((res == 10) || (res == 11)) res = 0;
            if (res != parseInt(cpf.substring(10, 11))) {
                div.innerHTML = `<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>CPF Inválido!</strong> Por favor, digite um CPF válido.
  </div>`
            };
        }

        const isEmpty = (value) => {
            return value.length === 0 ? true : false
        }

        function registerValidator() {
            if (isEmpty(username.value) || isEmpty(email.value) || isEmpty(cpf.value) || isEmpty(pass.value) || isEmpty(conpass.value)) {
                div.innerHTML = `<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Campo vazio!</strong> Por favor, preencha todos os campos.
  </div>`
            } else {
                div.innerHTML = ''
            }

            cpfValidator(cpf.value)
            emailValidator(email.value)
            passwordValidator(pass.value, conpass.value)
        }
    </script>
</body>

</html>
