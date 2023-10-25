<?php 

require_once('class/banner.php'); //fazendo a conexão
$listaBanner = new BannerClass();
$listar = $listaBanner->Listar();
//var_dump($listar);


?>

<link rel="stylesheet" href="css/dashboard.css">

<!--Estilo Listar-->

<style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
    /*font-family: 'Poppins', sans-serif;*/

    :root {
    --darkblue: #161925;
    --lightblue: #446688;
    --white: #fffcf9;
    --green: #31af8b;
    --orange: #ff850a;
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

    caption{
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 2%;
        padding: 2%;
        border-radius: 20px;
        background-color: var(--white);
    }
    table{
        background-color: var(--white);
        border-radius: 20px;
        padding: 2%;
        
    }
    th{
        background-color: rgba(231, 230, 234, 0.8);
        padding: 0.8rem;
    }
    td{
        text-align: center;
        padding: 0.8rem;
    }
    tbody img{
        width: 500px;
        height: 250px;
        border-radius: 2px;
        transition: all 0.9s ease-in-out;
        cursor: pointer;
    }   

    .id{
        font-weight: 800;
        background-color: rgba(231, 230, 234, 0.8);
    }


    .status-ativo{
        background-color: #2bee11;
        text-decoration: none;
        border-radius: 5px;
        color: var(--darkblue);
        font-weight: 600;
    } 
    
    .status-inativo{
    background-color: #f20b0b;
    text-decoration: none;
    border-radius: 5px;
    color: var(--darkblue);
    font-weight: 600;
}

    .inserir, .atualizar, .ativar, .desativar{
    font-size: 1.5rem;
    text-decoration: none;
    color:  var(--darkblue);
    }

  main{
  display: flex!important;
  width: 100%;
  justify-content: center;
}


</style>


<div>
    <table>
        <caption>Lista Banner</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>IMAGEM</th>
                <th>ALT</th>
                <th>TEXTO</th>
                <th>LINK</th>
                <th>STATUS</th>
                <th>INSERIR</th>
                <th>ATUALIZAR</th>
                <th>ATIVAR</th>
                <th>DESATIVAR</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($listar as $linha):?>
            <tr>
                <td class="id"><?php echo $linha['idBanner']?></td>             
                <td><?php echo '<img src="../img/' . $linha['imgBanner'] . '"alt="' . $linha['altBanner'] . '">' ?></td>                 
                <td><?php echo $linha['altBanner']?></td> 
                <td><?php echo $linha['textBanner']?></td>             
                <td><?php echo $linha['linkBanner']?></td>             
                <td class="<?php echo ($linha['statusBanner'] === 'ATIVO') ? 'status-ativo' : 'status-inativo'; ?>"><?php echo $linha['statusBanner']?></td>  
                <td><a class="inserir" title="Inserir" href="index.php?p=banner&b=inserir"><i class="ri-pencil-fill"></i></a></td>                                           
                <td><a class="atualizar" title="Atualizar" href="index.php?p=banner&b=atualizar&id=<?php echo $linha['idBanner']?>"><i class="ri-loop-left-line"></i></a></td>
                <td><a class="ativar" title="Ativar" href="index.php?p=banner&b=ativar&id=<?php echo $linha['idBanner']?>"><i class="ri-checkbox-circle-line"></i></a></td>
                <td><a class="desativar" title="Desativar" href="index.php?p=banner&b=desativar"><i class="ri-eye-off-line"></i></a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
