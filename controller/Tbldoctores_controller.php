<?php 

require_once 'model/Tbldoctores_model.php';
require_once 'model/Tbltipodocumento_model.php';

class Tbldoctores_controller{

 private $model_doctores;
 private $model_tipodocumento;


  public function __construct(){

     $this->model_doctores = new Tbldoctores_model();
     $this->model_tipodocumento = new Tbltipodocumento_model();
  }

  public function menuDoctores(){
      $consultaMedico = $this->model_doctores->consultarMedico();
      $consultaTipodoc = $this->model_tipodocumento->consultaTipodocumento();
      require_once 'view/menuDoctores.php';
  }



  public function guardarDato(){
      

     $dato['tipodoc'] = $_POST["seltipodoc"];
     $dato['numerodocumento'] = $_POST["txtnumerodocumento"];
     $dato['nombre'] = $_POST["txtnombre"];
     $this->model_doctores->insertMedico($dato);
     $this->menuDoctores();
 
  }

}






?>