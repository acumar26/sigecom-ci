<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empresas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        $this->load->model('empresas_model');
    }

    function _validaracceso() {
        $this->cargas->validarpermisos();

        $logeado = $this->session->userdata('logeado');
        $nidusuario = $this->session->userdata('nidusuario');

        if ($logeado != true OR $nidusuario = null) {
            redirect(URL_MAIN);
        }
    }

    function index() {

        $data['main_content'] = 'manten/empresas/panel_view';
        $data['titulo'] = 'Empresas';
        $this->load->view('master/plantilla_view', $data);
    }

    function buscarEmpresas() {

        $data['buscarEmpresas'] = $this->empresas_model->buscarEmpresas();
        $this->load->view('manten/empresas/qry_view', $data);
        
    }

    function ingresarEmpresas(){        
        $txt_empresa = $_POST['txt_empresa'];
        $txt_alias = $_POST['txt_alias'];
        
        $result = $this->empresas_model->ingresarEmpresas($txt_empresa,$txt_alias);
        
        if ($result){
            echo 1;
        }else{
            echo 0;
        }        
    }
    
    function estadoEmpresas(){
        $nidempresa = $_POST['nidempresa'];
        
        $result = $this->empresas_model->estadoEmpresas($nidempresa);
        
        if ($result){
            echo 1;
        }else{
            echo 0;
        }
        
    }
    
    function editarEmpresas(){
        $nidempresa = $_POST['nidempresa'];        
        $data['editarEmpresas'] = $this->empresas_model->editarEmpresas($nidempresa);        
        $this->load->view('manten/empresas/upd_view', $data);
        
    }
    
    function actualizarEmpresas(){
        $txte_nidempresa = $_POST['txte_nidempresa'];
        $txte_empresa = $_POST['txte_empresa'];
        $txte_alias = $_POST['txte_alias'];
        
        $result = $this->empresas_model->actualizarEmpresas($txte_nidempresa,$txte_empresa,$txte_alias);
        
        if ($result){
            echo 1;
        }else{
            echo 0;
        } 
    }
    
}