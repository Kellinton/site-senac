<?php

 session_start(); //iniciar sessão


 //se acessar a página admin, ele carrega a página do login por padrão
 if(!isset($_SESSION['login'])) {//isset verifica se foi inicializado algum valor. (lógica: se não estiver logado, não existir 'login' como parâmetro)
    header("Location:login.php"); //puxando a página do login
 }

 require_once('class/login.php');
 $usuario = new Login();
 $usuario->idUsuario = $_SESSION['idUser'];
 $dadosUsuario = $usuario->VerificarLogin();

 //var_dump($dadosUsuario);
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Dashboard</title>
    <link rel="shortcut icon" href="./img/dashboard/favicon-01.svg" type="image/x-icon">


    <!--ICONES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



     <!--Sweet Alert-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.12.6/dist/sweetalert2.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="./css/dashboard.css">
</head>

<body>

    <div class="grid-container">
        <header>
            <h1>
                <img class="logo" src="./img/dashboard/logo-desktop.svg" alt="Web de quebrada">
            </h1>

            <div>
                <div class="perfil-info">
                    <?php echo '<img src="../img/' . $dadosUsuario['fotoUsuario'] . '">' ?>
                    <div class="perfil-title">
                        <span class="perfil-nome"><?php echo $dadosUsuario['nomeUsuario']?></span> 
                        <span class="perfil-cargo"><?php echo ($dadosUsuario['nivelUsuario']) === '1' ? 'Gerente' : 'Administrador'?></span>
                    </div>
                </div>
                <div class="login">
                    <button class="btn-sair"><span class="sair-icon"><i class="ri-logout-circle-r-line"></i></span></i><span>Sair</span></button>
                </div>
            </div>
        </header>
        <nav id="menu">
            <div class="navbar">
                <ul> 

                    <li><a href="index.php?p=site"><span class="nav-icon"><i class="ri-home-3-line"></i></span><span class="nav-title">Site</span></a></li> 
                    <li><a href="index.php?p=usuario"><span class="nav-icon"><i class="ri-user-line"></i></span><span class="nav-title">Usuário</span></a></li>                  
                    <li><a href="index.php?p=sobre"><span class="nav-icon"><i class="ri-building-4-line"></i></span><span class="nav-title">Sobre</span></a>
                    <li><a href="index.php?p=servico"><span class="nav-icon"><i class="ri-shake-hands-line"></i></span><span class="nav-title">Serviços</span></a>
                    <li><a href="index.php?p=contato"><span class="nav-icon"><i class="ri-contacts-book-2-line"></i></span><span class="nav-title">Contato</span></a>
                    <li><a href="index.php?p=portfolio"><span class="nav-icon"><i class="ri-honour-line"></i></span><span class="nav-title">Portfólio</span></a>
                    <li><a href="index.php?p=banner"><span class="nav-icon"><i class="ri-folder-image-line"></i></span><span class="nav-title">Banner</span></a>
                    <li><a href="index.php?p=avaliacao"><span class="nav-icon"><i class="ri-team-line"></i></span><span class="nav-title">Avaliações</span></a>
                    <!-- <li><a href="index.php?p=configuracao"><span class="nav-icon"><i class="ri-settings-2-line"></i></span><span class="nav-title">Configurações</span></a> -->
                    <!-- <li><a href="index.php?p=perfil"><span class="nav-icon"><i class="ri-user-line"></i></span><span class="nav-title">Perfil</span></a></li> -->
                        
                    </li>
                </ul>
            </div>
        </nav>

        <main>

          <?php


            $pagina = @$_GET['p'];

            switch ($pagina) {
                case 'site':
                    require_once('site/site.php');
                    break;

                case 'usuario':
                    require_once('usuario/usuario.php');
                    break;  

                case 'sobre':
                    require_once('sobre/sobre.php');
                    break;
                    
                case 'servico':
                    require_once('servico/servico.php');
                    break;

                case 'contato':
                    require_once('contato/contato.php');
                    break;

                case 'banner':
                    require_once('banner/banner.php');
                    break;

                case 'portfolio':
                    require_once('portfolio/portfolio.php');
                    break;  

                case 'avaliacao':
                    require_once('avaliacao/avaliacao.php');
                    break;
                
                default:
                    echo 'Dashboard';
                    break;
            }



            // if($pagina == NULL){
            //     echo "Dashboard";
            // }else{
            //     if($pagina == 'servico'){
            //         require_once('servico/servico.php');
            //     }
            // }

           ?>


        </main>
    </div>


<!--SweetAlert-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.12.6/dist/sweetalert2.all.min.js"></script>

<script>
    const nav = document.getElementById('menu');
    const gridContainer = document.querySelector('.grid-container');
    const sections = document.querySelectorAll('section');
    const titleSpans = nav.querySelectorAll('.nav-title');


    nav.addEventListener('mouseleave', () => {
        gridContainer.style.gridTemplateColumns = '100px 1fr';
        const titleSpans = nav.querySelectorAll('.nav-title');
        titleSpans.forEach(span => {
            span.style.display = 'none';
        });
    });

    nav.addEventListener('mouseenter', () => {
        gridContainer.style.gridTemplateColumns = '300px 1fr';
        const titleSpans = nav.querySelectorAll('.nav-title');
        titleSpans.forEach(span => {
            span.style.display = 'inline-block';
        });
    });
    titleSpans.forEach(span => {
        span.addEventListener('click', () => {
            // Remove a classe 'ativo' de todas as .nav-title
            titleSpans.forEach(span => {
                span.classList.remove('ativo');
            });

            // Adiciona a classe 'ativo' apenas à .nav-title clicada
            span.classList.add('ativo');

            // Obtém o índice da .nav-title clicada
            const index = Array.from(titleSpans).indexOf(span);

            // Mostra a seção correspondente e oculta as outras
            sections.forEach((section, i) => {
                if (i === index) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        });
    });



    //temporário
    // const bloqueio = document.getElementById('bloqueado');

    // bloqueio.addEventListener('click', function(){
    //     // alert('Sessão Indisponível');
    //     //SweetAlert
    //     Swal.fire({
    //     title: 'Sessão indisponível!',
    //     icon: 'error', // Ícone: success, error, warning, etc.
    //     confirmButtonText: 'OK'
    // });

    // });


</script>

</body>
</html>