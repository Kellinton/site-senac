<?php 

require_once('class/contato.php'); //fazendo a conexão
$listaContato = new ContatoClass();
$listar = $listaContato->Listar();
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
        width: 80px;
        height: 150px;
        border-radius: 2px;
        transition: all 0.9s ease-in-out;
        cursor: pointer;
    }   
    tbody img:hover{
        transform: scale(3);
        border-radius: 2px;
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

    .inserir, .atualizar,
    .desativar{
        font-size: 1.5rem;
        text-decoration: none;
        color:  var(--darkblue);
    }
    main{
        place-items: center;
    }

</style>


<div>
    <table>
        <caption>Lista Contatos</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>TELEFONE</th>
                <th>TEXTO</th>
                <th>DATA</th>
                <th>HORA</th>
                <th>INSERIR</th>
                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($listar as $linha):?>
            <tr>
                <td class="id"><?php echo $linha['idContato']?></td>             
                <td><?php echo $linha['nomeContato']?></td>             
                <td><?php echo $linha['emailContato']?></td>   
                <td><?php echo $linha['telefoneContato']?></td>                    
                <td><?php echo $linha['textContato']?></td>             
                <td><?php echo $linha['dataContato']?></td>
                <td><?php echo $linha['horaContato']?></td>                         
                <td><a class="inserir" title="Inserir" href="index.php?p=contato&c=inserir"><i class="ri-pencil-fill"></i></a></td>           
                <td><a class="atualizar" title="Atualizar" href="index.php?p=contato&c=atualizar"><i class="ri-loop-left-line"></i></a></td>
                <td><a class="desativar" title="Desativar" href="index.php?p=contato&c=desativar"><i class="ri-eye-off-line"></i></a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
