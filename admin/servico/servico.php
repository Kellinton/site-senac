<?php


$pagina = @$_GET['s'];

if($pagina == NULL){
    require_once('listar.php');
}else{
    if($pagina == 'inserir'){
        require_once('inserir.php');
    }
    if($pagina == 'atualizar'){
        require_once('atualizar.php');
    }
    if($pagina == 'desativar'){
        require_once('desativar.php');
    }
    if($pagina == 'ativar'){
        require_once('ativar.php');
    }
}

//p=servico&s=inserir passando valor para "p" e para "s" para acessar páginas