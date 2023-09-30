<link rel="stylesheet" href="css/dashboard.css">
<link rel="stylesheet" href="css/inserir.css">

<div class="inserir-title">
    <span>Inserir Dados</span>
</div>

<div class="inserir-container">


    <form class="form-container" action="#" method="POST" class="form">

        <div class="form-img">
            <img src="img/dashboard/ace.svg" alt="">
            <div>
            <label class="enviar-arquivo" for="arquivo">Selecionar imagem<i class="ri-download-2-fill"></i></label>
            <input type="file" name="arquivo" id="arquivo">
            </div>
        </div>

        <div class="form-content">
            <input type="text" id="nome" name="nome" placeholder="Informe o título">
            <textarea name="mens" id="mens" cols="30" rows="10" required placeholder="Informe o texto"></textarea>
            <input type="url" name="" id="" placeholder="Informe o link">
            <input class="formBtn" type="submit" value="Inserir">
        </div>

        <div>
            
        <input type="checkbox" name="checkbox" id="checkbox">
        <label for="checkbox"></label>
        
        </div>

    </form>

   

</div>