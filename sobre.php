<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sobre Nós</title>

    <link rel="shortcut icon" href="img/logos/favicon-01.svg" type="image/x-icon" />

<!-- efeito animação divs -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!--Jquery, efeito do botao topo-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- slick.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--Fontawesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="shortcut icon" href="img/favicu.svg" type="image/x-icon">
<!--Css-->
<link rel="stylesheet" href="css/reset.css" />
<!--AOS-->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

<link rel="stylesheet" href="css/estilo.css" />
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/estiloSobre.css">
<link rel="stylesheet" href="css/responsivoSobre.css">
<link rel="stylesheet" href="css/responsivo.css">
<!--responsivo-->
</head>
<?php require_once('conteudo/menu.php'); ?>

<body>
    <!--Contém o menu e o banner-->
    <main>
        <section>
            <div class="pgSobre site">
                <h2>Sobre nós</h2>
                <div>
                    <div>
                        <h3>Valores</h3>
                        <p>Integridade: Agimos com honestidade, transparência e ética em todos os aspectos dos nossos negócios.Nos comprometemos a manter altos padrões de integridade em todas as nossas interações.</p>
                    </div>
                    <div>
                        <h3>Missão</h3>
                        <p>Queremos ser o parceiro de confiança dos nossos clientes, trabalhando lado a lado para alcançar os seus objetivos e proporcionar experiências memoráveis.</p>
                    </div>
                    <div>
                        <h3>Visão</h3>
                        <p>Buscamos inovar e desenvolver melhores soluções para nossos clientes,buscando fornecer as mais atualizadas e inovadoras soluções.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="colaboradores">
                <div class="site">
                    <h2>Colaboradores</h2>
                </div>
                <div class="imgColaboradores">

             
                    <div class="img1"><img src="img/sobre/sobre02.png" alt="Um dos nossos colaboradores">
                        <p>Kellinton</p>
                        <div class="mover">
                            <button class="botaoSobre" onclick="show()"><img src="img/sobre/setaS.svg" /></button>
                            <div id="divTeste">
                                <a href="https://webdequebrada.smpsistema.com.br/_kellinton/index.php" target="_blank" rel="noopener noreferrer"> <img src="img/sobre/logo.webb.svg" />
                                </a>
                                <a href="https://webdequebrada.smpsistema.com.br/_kellinton/agencatipi-senac/" target="_blank" rel="noopener noreferrer"> <img src="img/sobre/icontipi.png" /></a>
                            </div>
                        </div>
                    </div>

             
                    <div class="img2"><img src="img/sobre/sobre02.png" alt="Um dos nossos colaboradores">
                        <p>Samuel</p>
                        <div class="mover">
                            <button class="botaoSobre" onclick="show1()"><img src="img/sobre/setaS.svg" /></button>
                            <div id="divTeste1">
                                <a href="https://webdequebrada.smpsistema.com.br/_samuel/websamuel/" target="_blank" rel="noopener noreferrer"><img src="img/sobre/logo.webb.svg" /></a>
                                <a href="https://webdequebrada.smpsistema.com.br/_samuel/agenciatipisamel/" target="_blank" rel="noopener noreferrer"><img src="img/sobre/icontipi.png" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="img3"><img src="img/sobre/sobre02.png" alt="Um dos nossos colaboradores">
                        <p>Pedro</p>
                        <div class="mover">
                            <button class="botaoSobre" onclick="show2()"><img src="img/sobre/setaS.svg" /></button>
                            <div id="divTeste2">
                                <a href="https://webdequebrada.smpsistema.com.br/_pedro_vischi/web/" target="_blank" rel="noopener noreferrer"><img src="img/sobre/logo.webb.svg" /></a>
                                <a href="https://webdequebrada.smpsistema.com.br/_pedro_vischi/TipiVischiOFC/" target="_blank" rel="noopener noreferrer"><img src="img/sobre/icontipi.png" /></a>
                            </div>
                        </div>
                    </div>
 

                    <div class="img4"><img src="img/sobre/sobre02.png" alt="Um dos nossos colaboradores,Um homem alto e branco de boa apar">
                        <p>Kaue</p>
                        <div class="mover">
                            <button class="botaoSobre" onclick="show3()"><img src="img/sobre/setaS.svg" /></button>
                            <div id="divTeste3">
                                <a href="https://webdequebrada.smpsistema.com.br/_kaue/webdequebrada/servico.html" target="_blank" rel="noopener noreferrer"><img src="img/sobre/logo.webb.svg" /></a>
                                <a href="https://webdequebrada.smpsistema.com.br/_kaue/agenciaTipi/" target="_blank" rel="noopener noreferrer"><img src="img/sobre/icontipi.png" /></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
        </section>
    </main>

    <?php require_once('conteudo/rodape.php'); ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/javascript.js"></script>
</body>

</html>