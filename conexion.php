<?php

    class ConexionPDO{
        #creando variables
        private $host;
        private $dbname;
        private $usuario;
        private $contrasena;
        private $conexion;

        #creando constructor
        public function __construct($host, $dbname, $usuario, $contrasena, $conexion){
            $this -> host = $host;
            $this -> dbname = $dbname;
            $this -> usuario = $usuario;
            $this -> contrasena = $contrasena;
            $this -> conexion = $conexion;
        }

        public function conectar(){
            
        }


    }

?>