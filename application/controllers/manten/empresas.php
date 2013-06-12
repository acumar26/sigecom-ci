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

}