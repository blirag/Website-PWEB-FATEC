<?php
  include_once ('../db/connection.php');

  if(isset($_POST['register_btn'])):
    $nome = $_POST['username'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $conpass = $_POST['conpass'];

    $sql = "INSERT INTO cliente (name, cpf, email, password) VALUES ('$name', '$cpf', '$email', '$pass')";

    if(mysqli_query($connect, $sql)):
      header('Location: ../login.php?sucesso');
    else:
      header('Location: ../cadastro.php?erro-ao-cadastrar');
    endif;
  endif;