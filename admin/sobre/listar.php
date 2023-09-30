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
                <td><?php echo $linha['idSobre']?></td>                            
                <td><?php echo $linha['altSobre']?></td>             
                <td><?php echo $linha['textSobre']?></td>             
                <td><?php echo $linha['linkSobre']?></td>                       
                <td class="status-ativo"><?php echo $linha['statusSobre']?></td>             
                <td><a class="atualizar" title="Atualizar" href="index.php?p=sobre&s=atualizar"><i class="ri-pencil-fill"></i></a></td>
                <td><a class="desativar" title="Desativar" href="index.php?p=sobre&s=desativar"><i class="ri-eye-off-line"></i></a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
