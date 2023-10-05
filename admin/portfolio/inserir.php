<link rel="stylesheet" href="css/dashboard.css">


<!--Inserir / Estilo-->
<style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
    /*font-family: 'Poppins', sans-serif;*/

    :root {
    --darkblue: #161925;
    --lightblue: #446688;
    --white: #fffcf9;
    --green: #31af8b;
    --orange: #ff850a;
    --shadow-card: 5px 5px 15px rgba(0,0,0,0.1);
    }

    * {
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    }
    *,
    *::before,
    *::after {
    box-sizing: border-box;
    }

    main{
        place-items: center;
    }

    .inserir-container{
        margin-top: 2%;
        background-color: var(--white);
        width: 65%;
        padding: 3%;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        box-shadow: var(--shadow-card);
    }
    .inserir-title{
        background-color: var(--white);
        border-radius: 20px;
        text-align: center;
        padding: 2%;
        width: 60%;
        box-shadow: var(--shadow-card);
    }
    .inserir-title span{
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 2%;
        padding: 2%;
        
    }
    .form-container{
        width: 90%;
        flex-direction: column;
        align-items: center;
        display: flex; 
    }
    .form-content{  
        width: 50%;
        display: flex;  
        flex-direction: column;
        align-items: center;
        margin-top: 2%;
        padding: 2%;
    }
    form{
        position: relative;
    }
    .form-img{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        width: 50%;
    }
    .form-img img{
        border-radius: 20px;
        width: 18rem;
    }

    .enviar-arquivo{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--darkblue);
        width: 18rem;
        height: 50px;
        border-radius: 10px;
        border: none;
        color: white;
        cursor: pointer;
        transition: all 0.4s ease-in-out;
        opacity: 0.9;
        font-size: 1rem;
        gap: 3%;
        margin-top: 5%;
    }
    input[type=text],
    input[type=url]
    {
        background-color: rgba(231, 230, 234, 0.9);
        width: 100%;
        height: 60px;
        border-radius: 10px;
        padding: 2%;
        border: none;
        margin-bottom: 3%;
    }
    input[type=text]:nth-child(1){
    
        width: 100%;
    }
    input[type=submit]{
        margin-top: 1%;
        width: 100%;
    }

    input[type=file]{
    display: none;
    }

    input[type=checkbox]{
        display: none;
    }
    
    input[type=checkbox] + label::before{
        content: "Inativo";
        font-weight: 500;
        color: var(--darkblue);
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        top: 0;
        right: 10px;
        background-color: rgb(92, 78, 78);
        box-shadow: var(--shadow-card);
        height: 60px;
        width: 110px;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        transition: all 0.4s ease-in-out;
        align-self: center;
        opacity: 0.9;
        font-size: 1rem;
        cursor: pointer;
        box-shadow: rgba(10px, 15px, 15px, 0.5);
    }
    input[type=checkbox]:checked + label::before{
        content: "Ativo";
        color: var(--darkblue);  
        background-color: #2bee11;
       
    }
  


    .formBtn{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--darkblue);
        height: 50px;
        border-radius: 10px;
        border: none;
        color: white;
        cursor: pointer;
        transition: all 0.4s ease-in-out;
        align-self: center;
        opacity: 0.9;
        font-size: 1rem;
    }
    .formBtn:hover {
    opacity: 1;
    }

    #imagemExibida{
        cursor: pointer;
    }
</style>


<?php

    if(isset($_POST['tituloPortfolio'])){

        require_once('class/portfolio.php');

        $tituloPortfolio = $_POST['tituloPortfolio'];
        $imgPortfolio = $_POST['imgPortfolio'];
        $altPortfolio = $_POST['altPortfolio'];
        $statusPortfolio = $_POST['statusPortfolio'];

        $arquivo = $_FILES['imgPortfolio'];

        if($arquivo['error']){
            throw new Exception('Error' . $arquivo['error']);
        }

        if(move_uploaded_file($arquivo['tmp_name'], '../img/portfolio/' . $arquivo['name'] )){ //salvar na pasta
            $imgPortfolio = 'portfolio/' . $arquivo['name']; // gravar no banco de dados
        }else{
            throw new Exception('Error: Não foi possível realizar o upload da imagem');
        }

        $portfolio = new PortfolioClass();

        $portfolio->tituloPortfolio = $tituloPortfolio;
        $portfolio->imgPortfolio = $imgPortfolio;
        $portfolio->altPortfolio = $altPortfolio;
        $portfolio->statusPortfolio = $statusPortfolio;

        $portfolio->Inserir();

    }



?>

<div class="inserir-title">
    <span>Inserir Dados</span>
</div>

<div class="inserir-container">

                                                                                                                                      
    <form class="form-container" action="index.php?p=portfolio&pp=inserir" method="POST" enctype="multipart/form-data" class="form">

        <div class="form-img">
            <img src="img/dashboard/ace.svg" alt="Imagem" id="imagemExibida">
            <div>
            <label required class="enviar-arquivo" for="inputImagem">Selecionar imagem<i class="ri-download-2-fill"></i></label>
            <input type="file" required name="imgPortfolio" id="inputImagem">
            </div>
        </div>

        <div class="form-content">
            <input required type="text" id="tituloPortfolio" name="tituloPortfolio" placeholder="Informe o título: ">
            <input class="formBtn" type="submit" value="Inserir">
        </div>

        <div>
            
        <input required type="checkbox" name="statusPortfolio" id="checkbox" value="ATIVO">
        <label for="checkbox"></label>
        
        </div>

    </form>

</div>

<script>

    document.getElementById('imagemExibida').addEventListener('click', function(){
        document.getElementById('inputImagem').click();
    });

    document.getElementById('inputImagem').addEventListener('change', function(event){ //muda, atualiza
        let imagemExibida = document.getElementById('imagemExibida');
        let arquivo = event.target.files[0]; // um alvo

        if(arquivo){
            let carregar = new FileReader();
            
            carregar.onload = function(e){ 
                imagemExibida.src = e.target.result;
            };

            carregar.readAsDataURL(arquivo);//fazendo recarregamento do arquivo
        }

    });



</script>
