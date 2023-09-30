<?php

require_once('conexao.php');
 
class SobreClass
{
    // ATRIBUTOS
    public $idSobre;
    public $imgSobre;
    public $altSobre;
    public $textSobre;
    public $linkSobre;
    public $statusSobre;
 
    // MÉTODOS
    public function listar(){
        $query = "SELECT * FROM tblsobre WHERE statusSobre ='ATIVO' ORDER BY textSobre ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}