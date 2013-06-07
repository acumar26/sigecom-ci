<?php

class Prueba_model extends CI_Model {
    

    function __construct() {
        parent::__construct();
    }
   
    function pruebadatos() {
        //$this->adampt->setParam("login"); 
        //$this->adampt->setParam('mgarcia');
        //$this->adampt->setParam('');      
        $query = $this->adampt->consulta("SP_SGC_S_Validarusuario");

        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }    

}

?>