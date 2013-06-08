<?php

class Menu_model extends CI_Model {

    function __construct() {
        parent::__construct();
        
    }

    function menupadreusuario() {
        $this->cnsigecom->setParam("opcpadre");
        $this->cnsigecom->setParam('0');
        $this->cnsigecom->setParam($this->session->userdata('nidusuario'));
        $this->cnsigecom->setParam('0');
        $this->cnsigecom->setParam('7');
        
        $query = $this->cnsigecom->consulta('SP_SGC_S_Opciones');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function menuhijousuario ($nidopcion){
        $this->cnsigecom->setParam("opchijo");
        $this->cnsigecom->setParam('0');
        $this->cnsigecom->setParam($this->session->userdata('nidusuario'));
        $this->cnsigecom->setParam($nidopcion);
        $this->cnsigecom->setParam('7');
        
        $query = $this->cnsigecom->consulta('SP_SGC_S_Opciones');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function menupadrebasica() {
        $this->cnsigecom->setParam("opcpadre");
        $this->cnsigecom->setParam('0');
        $this->cnsigecom->setParam($this->session->userdata('nidusuario'));
        $this->cnsigecom->setParam('0');
        $this->cnsigecom->setParam('5');
        
        $query = $this->cnsigecom->consulta('SP_SGC_S_Opciones');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function menuhijobasica ($nidopcion){
        $this->cnsigecom->setParam("opchijo");
        $this->cnsigecom->setParam('0');
        $this->cnsigecom->setParam($this->session->userdata('nidusuario'));
        $this->cnsigecom->setParam($nidopcion);
        $this->cnsigecom->setParam('5');
        
        $query = $this->cnsigecom->consulta('SP_SGC_S_Opciones');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }

}

?>