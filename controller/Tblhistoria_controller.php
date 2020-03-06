<?php 

require_once 'model/Tbldoctores_model.php';
require_once 'model/Tbltipodocumento_model.php';
require_once 'model/Tblhistoria_model.php';
require_once 'model/Tblpacientes_model.php';

class Tblhistoria_controller{


    private $model_doctores;
    private $model_tipodocumento;
    private $model_historia;
    private $model_pacientes;
    
    public function __construct(){

        $this->model_doctores = new Tbldoctores_model();
        $this->model_tipodocumento = new Tbltipodocumento_model();
        $this->model_historia = new Tblhistoriamedica_model();
        $this->model_pacientes = new Tblpacientes_model();
    
    }

    public function menuHistoria(){

        $consultaMedico = $this->model_doctores->consultarMedico();
        $consultaTipodoc = $this->model_tipodocumento->consultaTipodocumento();
        $consultaPacientesId = $this->model_pacientes->consultaPacientesPorId();
        $consultaHistoria = $this->model_historia->consultaHistorias();
        require_once 'view/menuHistoria.php';

    }


}

