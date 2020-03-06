<?php 



class Tblhistoria_model{


    private $bd;
    private $tblhistoriamedica;

 public function __construct(){

    $this->bd = Conexion :: getConexion();
    $this->tblhistoriamedica = array();
 }

  public function insertHistoria($dato){

    $idhistoria = $dato['idhistoria']
    $pacientes = $dato['paciente'];
    $medicos = $dato['medico'];
    $observacion = $dato['observacion'];
    $fecha = $dato['fecha'];
    $consulta = "INSERT INTO tblhistorias (idhistoria, paciente, medico, observacion, fecha) VALUES ($idhistoria, $pacientes, $medicos, $observacion, $fecha)";
    mysqli_query($this->bd, $consulta) or die ("Error al insertar la historia");
    
  }

 public function consultaHistorias(){
    $consulta = $this->bd->query("SELECT * FROM tblhistorias");
    while($fila = $consulta->fetch_assoc()){
        
        $this->tblhistoriamedica[] = $fila;

    }
    return $this->tblhistoriamedica;


 }


}






?>