
<?php 

require_once('class/usuario.php'); //fazendo a conexão
$listaUsuario = new UsuarioClass();
$listar = $listaUsuario->Listar();
//var_dump($listar);


?>


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
main{
  display: flex!important;
  width: 100%;
  justify-content: center;
}
.user-container, table{
    width: 100%;
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
    padding: 1%;
}
th{
    background-color: rgba(231, 230, 234, 0.8);
    padding: 0.8rem;
}
td{
    text-align: center;
    padding: 0.8rem;
}
tr:hover{
    background-color: rgba(231, 230, 234, 0.4);
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

</style>

<link rel="stylesheet" href="css/dashboard.css">


<div class="user-container">
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
