<?php 

require_once('class/portfolio.php'); //fazendo a conexão
$listaPortfolio = new PortfolioClass();
$listar = $listaPortfolio->Listar();
//var_dump($listar);


?>

<link rel="stylesheet" href="css/dashboard.css">
<link rel="stylesheet" href="css/listar.css">

<div>
    <table>
        <caption>Lista de Serviços  <span class="icon-servico"><i class="ri-shake-hands-line"></i></span></caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>IMAGEM</th>
                <th>ALT</th>           
                <th>STATUS</th>
                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($listar as $linha):?>
            <tr>
                <td class="id"><?php echo $linha['idPortfolio']?></td>                       
                <td><?php echo '<img src="../img/' . $linha['imgPortfolio'] . '"alt="' . $linha['altPortfolio'] . '">' ?></td>      
                <td><?php echo $linha['altPortfolio']?></td>              
                <td class="status-ativo"><?php echo $linha['statusPortfolio']?></td>             
                <td><a class="atualizar" title="Atualizar" href="index.php?p=portfolio&s=atualizar"><i class="ri-pencil-fill"></i></a></td>
                <td><a class="desativar" title="Desativar" href="index.php?p=portfolio&s=desativar"><i class="ri-eye-off-line"></i></a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>