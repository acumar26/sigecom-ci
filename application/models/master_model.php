<?php

class Master_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function masterSexo() {
        $this->cnsigecom->setParam("qry_sexo");
        $this->cnsigecom->setParam(NULL);        
        $query = $this->cnsigecom->consulta('SP_SGC_S_Master');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
}

?>