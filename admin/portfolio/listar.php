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
                <th>TÍTULO</th>
                <th>IMAGEM</th>
                <th>ALT</th>
                <th>TEXTO</th>
                <th>LINK</th>
                <th>STATUS</th>
                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($listar as $linha):?>
            <tr>
                <td class="id"><?php echo $linha['idServico']?></td>             
                <td><?php echo $linha['tituloServico']?></td>             
                <td><?php echo $linha['imgServico']?></td>             
                <td><?php echo $linha['altServico']?></td>             
                <td><?php echo $linha['textServico']?></td>             
                <td><?php echo $linha['linkServico']?></td>             
                <td><?php echo $linha['statusServico']?></td>             
                <td class="ativar"><a href="index.php?p=servico&s=atualizar">Atualizar</a></td>
                <td class="desativar"><a href="index.php?p=servico&s=desativar">Desativar</a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>