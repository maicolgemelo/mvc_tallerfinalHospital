<?php 
    require_once 'model/Tblpacientes_model.php';
    require_once 'model/Tbltipodocumento_model.php';
    require_once 'model/Tblgenero_model.php';

    class Tblpacientes_controller{

        private $model_tipodocumento;
        private $model_pacientes;
        private $model_genero;
        

        public function __construct(){
            $this->model_tipodocumento = new Tbltipodocumento_model();
            $this->model_pacientes = new Tblpacientes_model();
            $this->model_genero = new Tblgenero_model();
        }

        public function menuPacientes(){
            $consultapaciente = $this->model_pacientes->consultaPacientes();
            $consultatipodocumento = $this->model_tipodocumento->consultaTipodocumento();
            $consultagenero = $this->model_genero->consultaGenero();
            require_once 'view/menuPaciente.php';
            
        }

        public function menuConsultaPaciente(){
            $consultapaciente = $this->model_pacientes->consultaPacientes();
            $consultatipodocumento = $this->model_tipodocumento->consultaTipodocumento();
            $consultagenero = $this->model_genero->consultaGenero();
            require_once 'view/menuConsultaPaciente.php';
        }

        public function index(){
            $consulta = $this->model_pacientes->consultar("Select * from tblpacientes");
            require_once 'view/menuPacientes.php';
        }

       /* public function modificar(){
            $numerodocumento = $_REQUEST['numerodocumento'];
            $consulta = $this->model_pacientes->consultarPorId("Select * from model_pacientes where numerodocumento=".$numerodocumento);
            require_once 'view/tblpacientes_modificar.php';
        }*/

       /* public function guardarCambiosPacientes(){
            $dato['nombre'] = $_POST["txtnombre"];
            $dato['apellido'] = $_POST["txtapellido"];
            $dato['tipodocumneto'] = $_POST["txttipodocumento"];
            $dato['numerodocumento'] = $_POST["txtnumerodocumento"];
            $dato['genero'] = $_POST["txtgenero"];
            $dato['edad'] = $_POST["txtedad"];
            $this->model_pacientes->actualizarPacientes($dato);
            $this->index();
        }*/


        public function guardar(){
            $dato['nombre'] = $_POST["txtnombre"];
            $dato['apellido'] = $_POST["txtapellido"];
            $dato['tipodocumento'] = $_POST["seltipodocumento"];
            $dato['numerodocumento'] = $_POST["txtnumerodocumento"];
            $dato['genero'] = $_POST["selgenero"];
            $dato['edad'] = $_POST["txtedad"];

            $this->model_pacientes->insertarPaciente($dato);
            $this->index();
        }
    }

?>