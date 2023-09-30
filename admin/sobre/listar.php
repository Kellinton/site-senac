<?php 

require_once('class/sobre.php'); //fazendo a conexão
$listaServico = new SobreClass();
$listar = $listaServico->Listar();
//var_dump($listar);


?>


<link rel="stylesheet" href="css/listar.css">

<div>
    <table>
        <caption>Lista  Sobre</caption>
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
                <td><?php echo $linha['idSobre']?></td>             
                <td><?php echo $linha['tituloSobre']?></td>             
                <td><?php echo $linha['imgSobre']?></td>             
                <td><?php echo $linha['altSobre']?></td>             
                <td><?php echo $linha['textSobre']?></td>             
                <td><?php echo $linha['linkSobre']?></td>             
                <td><?php echo $linha['statusSobre']?></td>             
                <td class="ativar"><a href="index.php?p=servico&s=atualizar">Atualizar</a></td>
                <td class="desativar"><a href="index.php?p=servico&s=desativar">Desativar</a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
