<?php

require_once('class/login.php');
session_start();

$msgErro = ''; //mensagem de erro ao tentar fazer o login

//verifica se está passando valor no campo do email
if(isset($_POST['email'])){

    $email = $_POST['email']; //pegando a informação do email
    $senha = $_POST['senha'];
    //$senha = password_hash($senha, PASSWORD_DEFAULT); Criptografar senha
    // md5$senha); segunda forma de criptografar senha


    $login = new Login(); //instanciando a class login
    $login->emailUsuario = $email;
    $login->senhaUsuario = $senha;
    $dadosLogin = $login->VerificarLogin();

    var_dump($dadosLogin);

    if($dadosLogin == NULL){
        $msgErro = 'Erro ao fazer o login! Tente novamente.';
        

    }else{
        $_SESSION['login']   = $dadosLogin['emailUsuario'];
        $_SESSION['idUser']  = $dadosLogin['idUsuario'];

         header('Location:index.php');

        exit();
    }

}

?>






<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--ICONES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="../img/logos/favicon-01.svg" type="image/x-icon">

</head>

<body>
    <main>          
        <form action="#" method="POST"> 
            <div class="form-title">
                <img src="img/login/logo-01.svg" alt="Logo Web de quebrada">
                <div>
                    <h2>Login</h2>
                </div>
            </div>

            <div class="inputs">
                <div>
                    <i class="ri-mail-fill"></i>
                    <input type="email" id="email" name="email" required placeholder="E-mail: ">
                </div>
                <div>
                    <i class="ri-lock-fill"></i>
                    <input type="password" id="senha" name="senha" placeholder="Senha: ">
                </div>
                <div>
                    <input class="formBtn" type="submit" value="Entrar">
                </div>
            </div>
        </form>
    </main>

</body>

</html>