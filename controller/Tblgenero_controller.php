  
<?php 
    require_once 'model/Tblgenero_model.php';

    class Tblgenero_controller{

        private $model_genero;

        public function __construct(){
            $this->model_genero = new Tblgenero_model();

        }

        public function index(){
            $consulta = $this->model_genero->consultar("Select * from tblgenero");
           
        }

    }

?>