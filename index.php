<?php

require_once('admin/class/servico.php'); //fazendo a conexão
$listaServico = new ServicoClass();
$listar = $listaServico->Listar();
// var_dump($listar);




//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;

//se a variavel email for inicializada "isset" de inicializada
if (isset($_POST['email'])) {
  //Load Composer's autoloader
  require 'mailer/Exception.php';
  require 'mailer/PHPMailer.php';
  require 'mailer/SMTP.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try { //disparador de email outlook SMTP e POP
    //Server settings

    //coniguracao para disparar o email
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Mostra todo o processo de envio Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication Se o servidor tem certificado de segurança
    $mail->Username   = 'webdequebrada@smpsistema.com.br';        //SMTP username Email que apenas para dispararar os emails
    $mail->Password   = 'Senac@agencia01';                     //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //Porta que esta sendo disparada o email, é interessante verificar na hospedagem no exemplo, a "hostinger" TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients Destinatário do email, quem receberá

    $mail->setFrom('webdequebrada@smpsistema.com.br', 'Web de Quebrada'); //quem dispara o email, envia o email e ao lado 'Site Agencia' é o assunto
    $mail->addAddress('webdequebrada@gmail.com');  // quem recebe o email, parecido com o "para" dos emails

    // $mail->addAddress('ellen@example.com');              
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name



    //Content

    // dados do email
    $nome = $_POST['nome']; //variaveis do '$' estao recebendo/capturando informacoes via POST
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $mens = $_POST['mens'];

    // requisição da classe contato.php
    require_once('admin/class/contato.php');

    $contato = new ContatoClass();

    $contato->nomeContato = $nome;
    $contato->emailContato = $email;
    $contato->telefoneContato = $tel;
    $contato->textContato = $mens;


    date_default_timezone_set('America/Sao_Paulo');
    $contato->dataContato = date('Y-m-d');
    $contato->horaContato = date('H:i:s');


    $contato->InserirContato();


    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Web de Quebrada'; //qual é o assunto
    $mail->Body    = "

        Nome: $nome <br>
        E-mail: $email <br>
        Telefone: $tel <br>
        Mensagem: $mens

      "; //body formato de email
    $mail->AltBody = "
      
      Nome: $nome <br>
      E-mail: $email <br>
      Telefone: $tel <br>
      Mensagem: $mens
      
      "; //Altbody também é o formato de email

    $mail->send(); //responsavel por disparar, enviar
    $ok = 1;
    // echo 'Mensagem enviada com SUCESSO!'; //se der certo, dispara essa mensagem
  } catch (Exception $e) { //mensagem de erro
    $ok = 2;
    // echo "Erro... Tente mais tarde: {$mail->ErrorInfo}";
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web de Quebrada</title>

    <link
      rel="shortcut icon"
      href="img/logos/favicon-01.svg" 
      type="image/x-icon"
    />
    
    <!-- efeito animação divs -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!--Jquery, efeito do botao topo-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- slick.js -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
      integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
      integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
      integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
      integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!--Fontawesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />


    <!--Css-->
    <link rel="stylesheet" href="css/reset.css" />


    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="css/aos.css">
    <!--responsivo-->
    <link rel="stylesheet" href="css/responsivo.css" />
  </head>

  <body>
    
     <?php require_once('conteudo/topo.php');?>
    
    <main>

    <?php require_once('conteudo/servico.php');?>
    <?php require_once('conteudo/sobre.php');?>
    <?php require_once('conteudo/portfolio.php');?>
    <?php require_once('conteudo/avaliacao.php');?>
    <?php require_once('conteudo/mapa.php');?>

   

    

    <!--#region botão Voltar-topo-->

      <a href="#" id="myLink" title="Voltar para o topo">
        <img class="seta-topo" src="img/icones/seta-topo.svg" alt="">
      </a>
    <!--#endregion botão Voltar-topo-->
    </main>


    <?php require_once('conteudo/rodape.php');?>






  <!--#region Script-->

    <!--pasta js-->
    <script src="./script/aos.js"></script>

    <!--SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="./script/javascript.js"></script>

  <!--#endregion Script-->
  </body>
</html>
