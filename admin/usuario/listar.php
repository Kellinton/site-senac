
<?php 

require_once('class/usuario.php'); //fazendo a conexão
$listaUsuario = new UsuarioClass();
$listar = $listaUsuario->Listar();
//var_dump($listar);


?>


<link rel="stylesheet" href="css/dashboard.css">
<link rel="stylesheet" href="css/listar.css">

<div>
    <table>
        <caption>Lista de Usuários</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>SENHA</th>
                <th>NÍVEL</th>
                <th>CADASTRO</th>
                <th>TELEFONE</th>
                <th>FOTO</th>
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
                <td class="id"><?php echo $linha['idUsuario']?></td>             
                <td><?php echo $linha['nomeUsuario']?></td>             
                <td><?php echo $linha['emailUsuario']?></td> 
                <td><?php echo $linha['senhaUsuario']?></td> 
                <td><?php echo $linha['nivelUsuario']?></td>         
                <td><?php echo $linha['dataCadUsuario']?></td>
                <td><?php echo $linha['telefoneUsuario']?></td>   
                <td><?php echo '<img src="../img/' . $linha['fotoUsuario'] . '">' ?></td>                       
                <td class="<?php echo ($linha['statusUsuario'] === 'ATIVO') ? 'status-ativo' : 'status-inativo'; ?>"><?php echo $linha['statusUsuario']?></td>
                <td><a class="inserir" title="Inserir" href="index.php?p=usuario&u=inserir"><i class="ri-pencil-fill"></i></a></td>           
                <td><a class="atualizar" title="Atualizar" href="index.php?p=usuario&u=atualizar&id=<?php echo $linha['idUsuario']?>"><i class="ri-loop-left-line"></i></a></td>
                <td><a class="ativar" title="Ativar" href="index.php?p=usuario&u=ativar&id=<?php echo $linha['idUsuario']?>"><i class="ri-checkbox-circle-line"></i></a></td>
                <td><a class="desativar" title="Desativar" href="index.php?p=usuario&u=desativar&id=<?php echo $linha['idUsuario']?>"><i class="ri-eye-off-line"></i></a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
