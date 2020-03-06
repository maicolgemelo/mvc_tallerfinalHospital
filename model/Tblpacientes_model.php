<?php

    class Tblpacientes_model{

        private $bd;
        private $tblpaciente;

        public function __construct(){
            $this->bd = Conexion::getConexion();
            $this->tblpaciente=array();
            $this->tbltipodocumento = array();
        }

        public function consulta($accion_sql){

            $consulta = $this->bd->query($accion_sql);
            while($fila = $consulta->fetch_assoc()){
                $this->tblpaciente[] = $fila;
            }
            
            return $this->tblpaciente;

        }


       /*public function actualizarPaciente($dato){
            $nombre = $dato['nombre'];
            $apellido = $dato['apellido'];
            $tipodocumento = $dato['idtipodocumneto'];
            $numerodocumento = $dato['numerodocumento'];
            $genero = $dato['genero'];
            $edad = $dato['edad'];
            $consulta = "update tblpacientes set nombre = '$nombre', apellido = '$apellido', tipodocumento = '$tipodocumento' 
            , genero = '$genero', edad = '$edad ' where numerodocumento = $numerodocumento ";
            mysqli_query($this->bd, $consulta) or die ("Error al actualizar los datos.");

        }*/


        public function insertarPaciente($dato){
            $nombre = $dato['nombre'];
            $apellido = $dato['apellido'];
            $tipodocumento = $dato['tipodocumento'];
            $numerodocumento = $dato['numerodocumento'];
            $genero = $dato['genero'];
            $edad = $dato['edad'];
            $consulta ="INSERT INTO tblpacientes(nombre,apellido,tipodocumento,numerodocumento,genero,edad) values ('$nombre','$apellido','$tipodocumento',$numerodocumento,'$genero',$edad)";
            mysqli_query($this->bd, $consulta) or die ("Error al insertar datos.");
        }

        public function consultaPacientes(){
            $consulta = $this->bd->query("SELECT t.nombre, p.numerodocumento, p.nombre as 'nompaciente', p.apellido, g.nombre, p.edad FROM tbltipodocumento t inner join tblpacientes p on t.idtipodocumento = p.numerodocumento inner join tblgenero g on g.idgenero = p.numerodocumento");

            while($fila=$consulta->fetch_assoc()){
                $this->tbltipodocumento[] = $fila;
            }

            return $this->tbltipodocumento;
            
        }

        public function consultaPacientesPorId(){
          $consulta = $this->bd->query("SELECT * FROM tblpacientes");
          while($fila = $consulta->fetch_assoc()){
             
            $this->tblpacientes[] = $fila;
          }
          return $this->tblpacientes;

        }

       

    }




?>