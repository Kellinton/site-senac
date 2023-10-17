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
    public function Inserir(){
        $query = "INSERT INTO tblsobre (imgSobre, altSobre, textSobre, linkSobre, statusSobre) 
                   VALUES('".$this->imgSobre."', '".$this->altSobre."', '".$this->textSobre."', '".$this->linkSobre."', '".$this->statusSobre."');";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=sobre'</script>";
    }
    public function Carregar(){
        $query = "SELECT * FROM tblsobre WHERE idSobre = " . $this->idSobre;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query); 
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){ //objeto que contém todos os dados

            $this->imgSobre = $linha['imgSobre'];
            $this->altSobre = $linha['altSobre'];
            $this->textSobre = $linha['textSobre'];
            $this->linkSobre = $linha['linkSobre'];
            $this->statusSobre = $linha['statusSobre'];
        }
    }

    public function Atualizar(){
        $query = "UPDATE tblsobre SET 
            imgSobre = '".$this->imgSobre."', 
            altSobre = '".$this->altSobre."', 
            textSobre = '".$this->textSobre."', 
            linkSobre = '".$this->linkSobre."', 
            statusSobre = '".$this->statusSobre."' 
        WHERE tblsobre.idSobre = " . $this->idSobre;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=sobre'</script>";
    }

    public function Desativar(){
        $query = "UPDATE tblsobre SET 
            statusSobre = 'INATIVO' 
        WHERE tblsobre.idSobre = " . $this->idSobre;
        
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=sobre'</script>";
    }
    
    public function Ativar(){
        $query = "UPDATE tblsobre SET 
            statusSobre = 'ATIVO' 
        WHERE tblsobre.idSobre = " . $this->idSobre;
        
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=sobre'</script>";
    }
}