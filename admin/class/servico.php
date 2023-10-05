<?php

require_once('conexao.php');
 
class ServicoClass
{
    // ATRIBUTOS
    public $idServico;
    public $tituloServico;
    public $imgServico;
    public $altServico;
    public $textServico;
    public $linkServico;
    public $statusServico;
 
    // MÉTODOS
    public function listar(){
        $query = "SELECT * FROM tblservico WHERE statusServico ='ATIVO' ORDER BY textServico ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Inserir(){
        $query = "INSERT INTO tblservico (tituloServico, imgServico, altServico, textServico, linkServico, statusServico) 
                   VALUES('".$this->tituloServico."', '".$this->imgServico."', '".$this->altServico."', '".$this->textServico."', '".$this->linkServico."', '".$this->statusServico."');";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=servico'</script>";
    }
}