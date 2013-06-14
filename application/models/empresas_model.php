<?php

class Empresas_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function buscarEmpresas() {
        $this->cnsigecom->setParam("buscar_empresas");
        $this->cnsigecom->setParam(NULL);        
        $query = $this->cnsigecom->consulta('SP_SGC_S_Empresas');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function ingresarempresas($txt_empresa,$txt_alias) {
        $this->cnsigecom->setParam("ins_empresas");
        $this->cnsigecom->setParam($txt_empresa);
        $this->cnsigecom->setParam($txt_alias);
        $this->cnsigecom->setParamOut1('msg');
        
        $this->cnsigecom->prepara('SP_SGC_I_Empresas');
        $this->cnsigecom->ejecuta();
                
        if ($this->cnsigecom->getParamOut1() == 1) {
            return 1;
        } else {
            return 0;
        }        
    }
    
    function estadoEmpresas($nidempresa){
        $this->cnsigecom->setParam("est_empresas");
        $this->cnsigecom->setParam($nidempresa);        
        $this->cnsigecom->setParam(NULL);
        $this->cnsigecom->setParam(NULL);
        $this->cnsigecom->setParamOut1('msg');
        
        $this->cnsigecom->prepara('SP_SGC_U_Empresas');
        $this->cnsigecom->ejecuta();
                
        if ($this->cnsigecom->getParamOut1() == 1) {
            return 1;
        } else {
            return 0;
        }  
    }
    
    function editarEmpresas($nidempresa){
        $this->cnsigecom->setParam("edt_empresas");
        $this->cnsigecom->setParam($nidempresa);                
        
        $query = $this->cnsigecom->getfila('SP_SGC_S_Empresas');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function actualizarEmpresas($txte_nidempresa,$txte_cempresa,$txte_calias){
        $this->cnsigecom->setParam("upd_empresas");
        $this->cnsigecom->setParam($txte_nidempresa);
        $this->cnsigecom->setParam($txte_cempresa);
        $this->cnsigecom->setParam($txte_calias);
        $this->cnsigecom->setParamOut1('msg');
        
        $this->cnsigecom->prepara('SP_SGC_U_Empresas');
        $this->cnsigecom->ejecuta();
                
        if ($this->cnsigecom->getParamOut1() == 1) {
            return 1;
        } else {
            return 0;
        }
    }

}

?>