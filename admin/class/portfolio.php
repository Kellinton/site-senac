<?php

require_once('conexao.php');
 
class PortfolioClass
{
    // ATRIBUTOS
    public $idPortfolio;
    public $tituloPortfolio;
    public $imgPortfolio;
    public $altPortfolio;
    public $statusPortfolio;
 
    // MÉTODOS
    public function listar(){
        $query = "SELECT * FROM tblportfolio WHERE statusPortfolio ='ATIVO' ORDER BY tituloPortfolio ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Inserir(){
        $query = "INSERT INTO tblportfolio (tituloPortfolio, imgPortfolio, altPortfolio, statusPortfolio) 
                   VALUES('".$this->tituloPortfolio."', '".$this->imgPortfolio."', '".$this->altPortfolio."', '".$this->statusPortfolio."');";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=portfolio'</script>";
    }
}