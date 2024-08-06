<?php
    class conectar {
        public function conectarse(){
            $dsn="mysql:host=localhost;dbname=billar_exotico;port=3306;charset=utf8";
            $usuario="root";
            $clave="";
            return new PDO($dsn, $usuario, $clave);

        }
    }