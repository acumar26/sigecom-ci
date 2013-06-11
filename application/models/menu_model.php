<?php

class Menu_model extends CI_Model {

    function __construct() {
        parent::__construct();
        
    }

    function menupadreusu() {
        $this->cnsigecom->setParam("opcpadre");
        $this->cnsigecom->setParam('0');
        $this->cnsigecom->setParam($this->session->userdata('nidusuario'));        
        $this->cnsigecom->setParam(7);
        $this->cnsigecom->setParam(null);
        $this->cnsigecom->setParam(null);
        
        $query = $this->cnsigecom->consulta('SP_SGC_S_Opciones');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function menuhijousu (){
        $this->cnsigecom->setParam("opchijo");
        $this->cnsigecom->setParam('0');
        $this->cnsigecom->setParam($this->session->userdata('nidusuario'));        
        $this->cnsigecom->setParam(7);
        $this->cnsigecom->setParam(null);
        $this->cnsigecom->setParam(null);
        
        $query = $this->cnsigecom->consulta('SP_SGC_S_Opciones');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function menupadrebas() {
        $this->cnsigecom->setParam("opcpadre");
        $this->cnsigecom->setParam('0');
        $this->cnsigecom->setParam($this->session->userdata('nidusuario'));        
        $this->cnsigecom->setParam(5);
        $this->cnsigecom->setParam(null);
        $this->cnsigecom->setParam(null);
        
        $query = $this->cnsigecom->consulta('SP_SGC_S_Opciones');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }

    function menuhijobas (){
        $this->cnsigecom->setParam("opchijo");
        $this->cnsigecom->setParam('0');
        $this->cnsigecom->setParam($this->session->userdata('nidusuario'));        
        $this->cnsigecom->setParam(5);
        $this->cnsigecom->setParam(null);
        $this->cnsigecom->setParam(null);
        
        $query = $this->cnsigecom->consulta('SP_SGC_S_Opciones');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function validarpermisos (){
        $this->cnsigecom->setParam("validarpermiso");
        $this->cnsigecom->setParam(null);
        $this->cnsigecom->setParam($this->session->userdata('nidusuario'));        
        $this->cnsigecom->setParam(null);
        $this->cnsigecom->setParam($this->session->userdata('url1'));
        $this->cnsigecom->setParam($this->session->userdata('url2'));
        $query = $this->cnsigecom->consulta('SP_SGC_S_Opciones');        
        
        if ($query) {
            return $query;
            
        } else {
            
            redirect(URL_MAINDAS.'index');
        }
    }
    
}

?>