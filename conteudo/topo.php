<!--#region Topo-->
<div class="topo-corpo">
      
    
      <?php require_once('conteudo/menu.php');?>

      <div class="slogan-cont">
        <div class="slogan-words">
          <p>Criação de sites</p>
          <div class="words">
            <span>Modernos.</span>
            <span>Institucionais.</span>
            <span>Responsivos.</span>
            <span>Otimizados.</span>
            <span>Modernos.</span>
          </div>
          <div class="slogan-btn-cont">
            <button id="abrirFormBtn" class="slogan-btn">Contratar</button>
            <div id="formConteudo">
            <button type="button" id="fecharFormBtn">X</button>
            
              <form id="myForm" action="#" method="POST" class="form"> <!--Class form para a reuisição do ajax-->
              
              <img src="img/logos/logo-01.svg" alt="logo da Web de Quebrada">       

                <input type="text" id="nome" name="nome" placeholder="Seu nome:">
              
                <input type="email" id="email" name="email" required placeholder="Seu e-mail:">
          
                <input type="tel" id="tel" name="tel" placeholder="Seu número:">

                <textarea name="mens" id="mens" cols="30" rows="10" placeholder="Deixe sua mensagem:"></textarea>

                <input class="formBtn" type="submit" value="Enviar">

                <div class="mostrarform">
                 <?php
                    if ($ok == 1) {
                      echo "Mensagem Enviada! "; //o ponto serve para contratenar, misturar variável "$nome" com o texto "sua mensagem foi enviada com sucesso!!!"
                    }elseif ($ok == 2) {
                      echo "Erro ao enviar sua mensagem!";
                    }

                    ?>
                </div>

              </form>
            </div>
          </div>
        </div>
        <!-- <div><span class="digitando-efeito"></span></div> -->
      </div>
      <!-- <div id="arrowposition">
        <img id="arrowimg" src="img/arrow-top.svg" alt="">
      </div> -->
</div>

  <!--#endregion Topo-->