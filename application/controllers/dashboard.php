<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();                   
    }
    
    public function index() {
        
        $data['main_content'] = 'dashboard/dashboard_view';
        $this->load->view('master/plantilla_view', $data);        
        
    }    

}