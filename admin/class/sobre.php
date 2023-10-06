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
}