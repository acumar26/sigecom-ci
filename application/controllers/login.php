<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_model');        
    }

    public function index() {
        $this->load->view('login_view');
    }

    public function enviardatos() {
        $txt_usuario = trim($_POST['txt_usuario']);
        $txt_contrasena = md5(trim($_POST['txt_contrasena']));

        $result = $this->login_model->enviardatos($txt_usuario, $txt_contrasena);

        if ($result) {

            $sesion_data = array(                
                'logeado' => true,
                'cusuario' => $result[0]['cusuario'],
                'datos' => $result[0]['cnombres'] . ', ' . $result[0]['capellidos'],
                'nidusuario' => $result[0]['nidusuario'],
                'nidpersona' => $result[0]['nidpersona']
            );
            $this->session->set_userdata($sesion_data);            
            
            echo 1;
            
        } else {
            echo 0;
        }
    }

}