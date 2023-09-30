<?php 

require_once('admin/class/servico.php'); //fazendo a conexão
$listaServico = new ServicoClass();
$listar = $listaServico->Listar();
// var_dump($listar);


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

    <!-- Efeito letra slogan -->
    <!-- <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
      var typingeffect = new Typed(".digitando-efeito", {
        strings: ["sua presença online", "seu portfólio"],
        loop: true,
        typeSpeed: 150,
        backSpeed: 100,
        backDelay: 1500,
      });
    </script> -->

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

    <!--Css-->
    <link rel="stylesheet" href="css/reset.css" />
    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/aos.css" />
    <!--responsivo-->
    <link rel="stylesheet" href="css/responsivo.css" />
  </head>

  <body>
    <!--#region Topo-->

    <?php require_once('conteudo/menu.php'); ?>


    <!--#endregion Topo-->

  <main>
    <section class="site">
    
      <div class="serv-txt">
        <h2>Nós temos a <span>solução!</span></h2>
        <p>Se liga no que a Quebrada tem para seu negócio</p>
      </div>


      <section class="serv-wrapper">

        <?php foreach($listar as $linha):array_slice($listar, 0, 3);?>
   
        <article class="serv-card">

          <img class="" src ="img/<?php echo $linha['imgServico'] ?>" alt="<?php echo $linha['altServico'] ?>">
          <h2><?php echo $linha['tituloServico'] ?></h2>
          <p>
          <?php echo $linha['textServico'] ?>
          </p>  
          <a role="link" href="<?php echo $linha['linkServico'] ?>" target="_blank" class="slogan-btn">Contratar</a>
        </article>
        
        <?php endforeach; ?>
      </section>

    </section>       
  </main>
   
   <!--#region Voltar-topo-->
      <!--botão/voltar/topo-->
      <a href="#" id="myLink" title="Voltar para o topo">
        <img class="seta-topo" src="img/seta-topo.svg" alt="">
      </a>
    <!--#endregion Voltar-topo-->

    <!--#region Rodape-->

    <!--Rodapé-->


  <?php require_once('conteudo/rodape.php'); ?>

    <!--#endregion Rodape-->

    <!--#region Script-->

    <!--pasta js-->
    <script src="./script/aos.js"></script>
    <script src="./script/javascript.js"></script>

    <!--#endregion Script-->
  </body>
</html>

