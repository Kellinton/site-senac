<?php 

require_once('class/contato.php'); //fazendo a conexão
$listaContato = new ContatoClass();
$listar = $listaContato->Listar();
//var_dump($listar);


?>


<link rel="stylesheet" href="css/listar.css">

<div>
    <table>
        <caption>Listar Serviços</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>TÍTULO</th>
                <th>IMG</th>
                <th>ALT</th>
                <th>TEXT</th>
                <th>LINK</th>
                <th>STATUS</th>
                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($listar as $linha):?>
            <tr>
                <td><?php echo $linha['idServico']?></td>             
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
