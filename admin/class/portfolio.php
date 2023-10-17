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
    public function Carregar(){
        $query = "SELECT * FROM tblportfolio WHERE idPortfolio = " . $this->idPortfolio;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query); 
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){ //objeto que contém todos os dados

            $this->tituloPortfolio = $linha['tituloPortfolio'];
            $this->imgPortfolio = $linha['imgPortfolio'];
            $this->altPortfolio = $linha['altPortfolio'];
            $this->statusPortfolio = $linha['statusPortfolio'];
        }
    }

    public function Atualizar(){
        $query = "UPDATE tblportfolio SET 
            tituloPortfolio = '".$this->tituloPortfolio."', 
            imgPortfolio = '".$this->imgPortfolio."', 
            altPortfolio = '".$this->altPortfolio."', 
            statusPortfolio = '".$this->statusPortfolio."' 
        WHERE tblportfolio.idPortfolio = " . $this->idPortfolio;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=portfolio'</script>";
    }

    public function Desativar(){
        $query = "UPDATE tblportfolio SET 
            statusServico = 'INATIVO' 
        WHERE tblportfolio.idPortfolio = " . $this->idPortfolio;
        
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=portfolio'</script>";
    }
    
    public function Ativar(){
        $query = "UPDATE tblportfolio SET 
            statusPortfolio = 'ATIVO' 
        WHERE tblportfolio.idPortfolio = " . $this->idPortfolio;
        
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=portfolio'</script>";
    }
}