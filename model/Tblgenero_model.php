<?php

    class Tblgenero_model{

        private $bd;
        private $tblgenero;

        public function __construct(){
            $this->bd = Conexion::getConexion();
            $this->tblgenero=array();
        } 

        public function consultaGenero(){
            $consulta = $this->bd->query("SELECT * FROM tblgenero");
            while($fila = $consulta->fetch_assoc()){
                $this->tblgenero[] = $fila;
            }
            
            return $this->tblgenero;
        }
    }



?>