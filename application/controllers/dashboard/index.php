<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->_validarlogueo(); 
        $this->load->model('menu_model');
    }
    
    function _validarlogueo() {
        $logeado = $this->session->userdata('logeado');
        $nidusuario = $this->session->userdata('nidusuario');              
        
        if ($logeado != true OR $nidusuario = null ) {
            redirect(URL_MAIN);            
        }
    } 
    
    public function index() {
        
        $data['main_content'] = 'dashboard/dashboard_view';
        
        //Cargar Tipo opcion usuario
        $data['menupadreusuario'] =  $this->menu_model->menupadreusuario();        
        foreach ($data['menupadreusuario'] as $key => $hijousuario) {
            $data['menuhijousuario'] =  $this->menu_model->menuhijousuario($hijousuario['nidopcion']);
        }
        
        //Cargar Tipo opcion básicas
        $data['menupadrebasica'] =  $this->menu_model->menupadrebasica();        
        foreach ($data['menupadrebasica'] as $key => $hijobasica) {
            $acumularbasica[] =  $this->menu_model->menuhijobasica($hijobasica['nidopcion']);
        }
        $data['menuhijobasica'] = $acumularbasica;
        
        $data['titulo'] = 'SIGECOM';
        $this->load->view('master/plantilla_view', $data);        
        
    }    

}