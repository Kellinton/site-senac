<?php

require_once('conexao.php');
 
class BannerClass
{
    // ATRIBUTOS
    public $idBanner;
    public $imgBanner;
    public $altBanner;
    public $linkBanner;
    public $statusBanner;
 
    // MÉTODOS
    public function listar(){
        $query = "SELECT * FROM tblbanner WHERE statusBanner ='ATIVO' ORDER BY idBanner;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}