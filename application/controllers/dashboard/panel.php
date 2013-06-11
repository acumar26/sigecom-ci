<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Panel extends CI_Controller {

    function __construct() {
        parent::__construct();         
        $this->_validaracceso();
    }
    
    function _validaracceso() {
        $this->cargas->validarpermisos();
        
        $logeado = $this->session->userdata('logeado');
        $nidusuario = $this->session->userdata('nidusuario');              
        
        if ($logeado != true OR $nidusuario = null ) {
            redirect(URL_MAIN);            
        }
    }    
    
    public function vermisdatos() {       
        
        $data['main_content'] = 'panel/vermisdatos_view'; 
        $data['titulo'] = 'Ver mis datos';
        $this->load->view('master/plantilla_view', $data);        
        
    }    

}