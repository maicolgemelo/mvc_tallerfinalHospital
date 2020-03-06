<?php 

class Tbldoctores_model{


 private $bd;
 private $tbldoctores;
 private $tbltipodocumento;

 public function __construct(){

  $this->bd = Conexion :: getConexion();
  $this->tbldoctores = array();
  $this->tbltipodocumento = array();

 }

 public function insertMedico($dato){

    $tipodocumento = $dato['tipodoc'];
    $numerodocumento = $dato['numerodocumento'];
    $nombre = $dato['nombre'];
    $consulta = "INSERT INTO tblmedicos(tipodoc,numerodocumento,nombre) VALUES ('$tipodocumento', '$numerodocumento',''$nombre')";
    mysqli_query($this->bd, $consulta) or die ("Error al insertar los datos");
 }


 

 public function consultarMedico(){
     $consulta = $this->bd->query("SELECT * FROM tblmedicos");
     while($fila = $consulta->fetch_assoc()){
         $this->tbldoctores[] = $fila;
     }
     return $this->tbldoctores;
 }

 


}




?>