<?php

require_once('conexao.php');
 
class UsuarioClass
{
    // ATRIBUTOS
    public $idUsuario;
    public $nomeUsuario;
    public $emailUsuario;
    public $senhaUsuario;
    public $nivelUsuario;
    public $dataCadUsuario;
    public $telefoneUsuario;
    public $statusUsuario;
    public $fotoUsuario;
 
    // MÉTODOS
    public function __construct($id = false) //verificar se o id foi passado
    {
        if($id){
            $this->idUsuario = $id;
            // $this->Carregar();
        }
    }


    public function listar(){
        $query = "SELECT * FROM tblusuario ORDER BY nomeUsuario ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query); // retorna o resultado que está na query
        $lista = $resultado->fetchAll();
        return $lista;
    }

     public function Inserir(){
         $query = "INSERT INTO tblusuario(nomeUsuario, emailUsuario, senhaUsuario, nivelUsuario, telefoneUsuario, statusUsuario, fotoUsuario) 
                    VALUES ('".$this->nomeUsuario."','".$this->emailUsuario."','".$this->senhaUsuario."','".$this->nivelUsuario."','".$this->telefoneUsuario."',''".$this->statusUsuario."'','".$this->fotoUsuario."');";
         $conn = Conexao::LigarConexao();
         $conn->exec($query);
         echo "<script>document.location='index.php?p=usuario'</script>";
     }

    public function Carregar(){
        $query = "SELECT * FROM tblusuario WHERE idUsuario = " . $this->idUsuario;
         $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query); 
       $lista = $resultado->fetchAll();

         foreach($lista as $linha){ //objeto que contém todos os dados

           $this->nomeUsuario = $linha['nomeUsuario'];
            $this->emailUsuario = $linha['emailUsuario'];
            $this->senhaUsuario = $linha['senhaUsuario'];
            $this->nivelUsuario = $linha['nivelUsuario'];
            $this->telefoneUsuario = $linha['telefoneUsuario'];
            $this->statusUsuario = $linha['statusUsuario'];
            $this->fotoUsuario = $linha['fotoUsuario'];
        }
     }

    // public function Atualizar(){
    //     $query = "UPDATE tblservico SET 
    //         tituloServico = '".$this->tituloServico."', 
    //         imgServico = '".$this->imgServico."', 
    //         textServico = '".$this->textServico."', 
    //         linkServico = '".$this->linkServico."', 
    //         statusServico = '".$this->statusServico."' 
    //     WHERE tblservico.idServico = " . $this->idServico;

    //     $conn = Conexao::LigarConexao();
    //     $conn->exec($query);
    //     echo "<script>document.location='index.php?p=servico'</script>";
    // }

    // public function Desativar(){
    //     $query = "UPDATE tblservico SET 
    //         statusServico = 'INATIVO' 
    //     WHERE tblservico.idServico = " . $this->idServico;
        
    //     $conn = Conexao::LigarConexao();
    //     $conn->exec($query);
    //     echo "<script>document.location='index.php?p=servico'</script>";
    // }
    
    // public function Ativar(){
    //     $query = "UPDATE tblservico SET 
    //         statusServico = 'ATIVO' 
    //     WHERE tblservico.idServico = " . $this->idServico;
        
    //     $conn = Conexao::LigarConexao();
    //     $conn->exec($query);
    //     echo "<script>document.location='index.php?p=servico'</script>";
    // }
}