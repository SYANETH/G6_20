<?php
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $Conectar = $this->dbh = new PDO("mysql:host=52.152.236.67;dbname=G6_20","G6_20","dAG0h3zR");
                return $Conectar;
            } catch(Exception $e) {
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>
