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
        justify-content: space-between;
        display: flex;
    
    }
    .form-content{  
        width: 50%;
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
    
        width: 70%;
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
  

    textarea{
        background-color: rgba(231, 230, 234, 0.9);
        width: 100%;
        height: 150px;
        border-radius: 10px;
        padding: 2%;
        border: none;
        margin-bottom: 1%;
        resize: none;
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

    if(isset($_POST['tituloServico'])){

        require_once('class/servico.php');

        $tituloServico = $_POST['tituloServico'];
        $textServico = $_POST['textServico'];
        $linkServico = $_POST['linkServico'];
        $statusServico = $_POST['statusServico'];

        $arquivo = $_FILES['imgServico'];

        if($arquivo['error']){
            throw new Exception('Error' . $arquivo['error']);
        }

        if(move_uploaded_file($arquivo['tmp_name'], '../img/servico/' . $arquivo['name'] )){ //salvar na pasta
            $imgServico = 'servico/' . $arquivo['name']; // gravar no banco de dados
        }else{
            throw new Exception('Error: Não foi possível realizar o upload da imagem');
        }

        $servico = new ServicoClass();

        $servico->tituloServico = $tituloServico;
        $servico->imgServico = $imgServico;
        $servico->altServico = $altServico;
        $servico->textServico = $textServico;
        $servico->linkServico = $linkServico;
        $servico->statusServico = $statusServico;

        $servico->Inserir();

    }



?>

<div class="inserir-title">
    <span>Inserir Dados</span>
</div>

<div class="inserir-container">

                                                                                                                                      
    <form class="form-container" action="index.php?p=servico&s=inserir" method="POST" enctype="multipart/form-data" class="form">

        <div class="form-img">
            <img src="img/dashboard/ace.svg" alt="Imagem" id="imagemExibida">
            <div>
            <label required class="enviar-arquivo" for="inputImagem">Selecionar imagem<i class="ri-download-2-fill"></i></label>
            <input type="file" required name="imgServico" id="inputImagem">
            </div>
        </div>

        <div class="form-content">
            <input required type="text" id="tituloServico" name="tituloServico" placeholder="Informe o título: ">
            <textarea required name="textoServico" id="textoServico" cols="30" rows="10" placeholder="Informe o texto: "></textarea>
            <input required type="url" name="linkServico" id="linkServico" placeholder="Informe o link: ">
            <input class="formBtn" type="submit" value="Inserir">
        </div>

        <div>
            
        <input required type="checkbox" name="statusServico" id="checkbox" value="ATIVO">
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
