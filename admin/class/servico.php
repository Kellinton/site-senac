<?php

require_once('conexao.php');
 
class ServicoClass
{
    // ATRIBUTOS
    public $idServico;
    public $tituloServico;
    public $imgServico;
    public $textServico;
    public $linkServico;
    public $statusServico;
 
    // MÉTODOS
    public function __construct($id = false) //verificar se o id foi passado
    {
        if($id){
            $this->idServico = $id;
            $this->Carregar();
        }
    }


    public function listar(){
        $query = "SELECT * FROM tblservico ORDER BY textServico ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query); // retorna o resultado que está na query
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Inserir(){
        $query = "INSERT INTO tblservico (tituloServico, imgServico,  textServico, linkServico, statusServico) 
                   VALUES('".$this->tituloServico."', '".$this->imgServico."', '".$this->textServico."', '".$this->linkServico."', '".$this->statusServico."');";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=servico'</script>";
    }

    public function Carregar(){
        $query = "SELECT * FROM tblservico WHERE idServico = " . $this->idServico;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query); 
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){ //objeto que contém todos os dados

            $this->tituloServico = $linha['tituloServico'];
            $this->imgServico = $linha['imgServico'];
            $this->textServico = $linha['textServico'];
            $this->linkServico = $linha['linkServico'];
            $this->statusServico = $linha['statusServico'];
        }
    }

    public function Atualizar(){
        $query = "UPDATE tblservico SET 
            tituloServico = '".$this->tituloServico."', 
            imgServico = '".$this->imgServico."', 
            textServico = '".$this->textServico."', 
            linkServico = '".$this->linkServico."', 
            statusServico = '".$this->statusServico."' 
        WHERE tblservico.idServico = " . $this->idServico;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=servico'</script>";
    }

    public function Desativar(){
        $query = "UPDATE tblservico SET 
            statusServico = 'INATIVO' 
        WHERE tblservico.idServico = " . $this->idServico;
        
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=servico'</script>";
    }
    
}