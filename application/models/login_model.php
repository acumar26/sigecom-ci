<?php

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function enviardatos($txt_usuario, $txt_contrasena) {
        $this->cnsigecom->setParam("login");
        $this->cnsigecom->setParam($txt_usuario);
        $this->cnsigecom->setParam($txt_contrasena);
        
        $query = $this->cnsigecom->consulta('SP_SGC_S_Validarusuario');        
        
        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }

}

?>