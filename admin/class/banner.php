<?php

require_once('conexao.php');
 
class BannerClass
{
    // ATRIBUTOS
    public $idBanner;
    public $imgBanner;
    public $altBanner;
    public $textBanner;
    public $linkBanner;
    public $statusBanner;
 
    // MÉTODOS
    public function __construct($id = false) //verificar se o id foi passado
    {
        if($id){
            $this->idBanner = $id;
            $this->Carregar();
        }
    }

    public function listar(){
        $query = "SELECT * FROM tblbanner ORDER BY idBanner;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
    public function Inserir(){
        $query = "INSERT INTO tblbanner (imgBanner, altBanner, textBanner, linkBanner, statusBanner) 
                   VALUES('".$this->imgBanner."', '".$this->altBanner."', '".$this->textBanner."', '".$this->linkBanner."', '".$this->statusBanner."');";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=banner'</script>";
    }
    public function Carregar(){
        $query = "SELECT * FROM tblbanner WHERE idBanner = " . $this->idBanner;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query); 
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){ //objeto que contém todos os dados

            $this->imgBanner = $linha['imgBanner'];
            $this->altBanner = $linha['altBanner'];
            $this->textBanner = $linha['textBanner'];
            $this->linkBanner = $linha['linkBanner'];
            $this->statusBanner = $linha['statusBanner'];
        }
    }

    public function Atualizar(){
        $query = "UPDATE tblbanner SET 
            imgBanner = '".$this->imgBanner."', 
            altBanner = '".$this->altBanner."', 
            textBanner = '".$this->textBanner."', 
            linkBanner = '".$this->linkBanner."', 
            statusBanner = '".$this->statusBanner."' 
        WHERE tblbanner.idBanner = " . $this->idBanner;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=banner'</script>";
    }

    public function Desativar(){
        $query = "UPDATE tblbanner SET 
            statusBanner = 'INATIVO' 
        WHERE tblbanner.idBanner = " . $this->idBanner;
        
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=banner'</script>";
    }
    
    public function Ativar(){
        $query = "UPDATE tblbanner SET 
            statusBanner = 'ATIVO' 
        WHERE tblbanner.idBanner = " . $this->idBanner;
        
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=banner'</script>";
    }
}