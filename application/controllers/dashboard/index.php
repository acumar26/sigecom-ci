<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->_validarlogueo(); 
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
        $data['titulo'] = 'SIGECOM';
        $this->load->view('master/plantilla_view', $data);        
        
    }    

}