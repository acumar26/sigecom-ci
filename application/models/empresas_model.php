<?php

class Empresas_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function buscarEmpresas() {
        $this->cnsigecom->setParam("buscar_empresas");
        $query = $this->cnsigecom->consulta('SP_SGC_S_Empresas');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }

}

?>