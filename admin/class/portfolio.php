<?php

require_once('conexao.php');
 
class PortfolioClass
{
    // ATRIBUTOS
    public $idPortfolio;
    public $imgPortfolio;
    public $tituloServico;
    public $altPortfolio;
    public $statusPortfolio;
 
    // MÉTODOS
    public function listar(){
        $query = "SELECT * FROM tblportfolio WHERE statusPortfolio ='ATIVO' ORDER BY imgPortfolio ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}