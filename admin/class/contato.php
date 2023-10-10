<?php

require_once('conexao.php');


class ContatoClass{

    //ATRIBUTOS

    public $idContato;
    public $nomeContato;
    public $emailContato;
    public $telefoneContato;
    public $textContato;
    public $dataContato;
    public $horaContato;

    //METODO

    public function InserirContato(){
        $sql ="INSERT INTO tblcontato (nomeContato, emailContato, telefoneContato, 
            textContato, dataContato, horaContato) 
            VALUE ('".$this->nomeContato."','".$this->emailContato."','".$this->telefoneContato."','".$this->textContato."','".$this->dataContato."','".$this->horaContato."')";
        $conn = Conexao::LigarConexao();
        $conn->exec($sql);
    }


    public function listar(){
        $query = "SELECT * FROM tblcontato ORDER BY idContato ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    // public function Inserir(){
    //     $query = "INSERT INTO tblcontato (nomeContato, emailContato, telefoneContato, textContato, dataContato, horaContato) 
    //                VALUES('".$this->nomeContato."', '".$this->emailContato."', '".$this->telefoneContato."', '".$this->textContato."', '".$this->dataContato."', '".$this->horaContato."');";
    //     $conn = Conexao::LigarConexao();
    //     $conn->exec($query);
    //     echo "<script>document.location='index.php?c=contato'</script>";
    // }

}