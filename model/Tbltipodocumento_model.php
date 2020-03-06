<?php 
class Tbltipodocumento_model{

private $bd;
private $tbltipodocumento;
private $tblgenero;

public function __construct(){
    $this->bd = Conexion::getConexion();
    $this->tbltipodocumento=array();
    $this->tblgenero=array();
}

public function consultaTipodocumento(){

    $consulta = $this->bd->query("SELECT * FROM tbltipodocumento");
    while($fila = $consulta->fetch_assoc()){
        $this->tbltipodocumento[] = $fila;
    }
    
    return $this->tbltipodocumento;

}




}
?>