<?php
session_start();
class Cargas {
   
    //Crear menu de opciones por tipo de opciones
    public function menupadreusu() {
        $CI = & get_instance();
        $CI->load->model('menu_model','menupadreusu'); 
        $url1 = $CI->uri->segment(1);
        $data = array('url1' => $url1);
        $CI->session->set_userdata($data);        
        return $CI->menupadreusu->menupadreusu();
    }
    
    public function menuhijousu() {
        $CI = & get_instance();
        $CI->load->model('menu_model','menuhijousu'); 
        $url2 = $CI->uri->segment(1).'/' . $CI->uri->segment(2);
        $data = array('url2' => $url2);
        $CI->session->set_userdata($data);
        
        return $CI->menuhijousu->menuhijousu();
    }
    
    public function menupadrebas() {
        $CI = & get_instance();
        $CI->load->model('menu_model','menupadrebas'); 
        $url1 = $CI->uri->segment(1);
        $data = array('url1' => $url1);  
        $CI->session->set_userdata($data);
        return $CI->menupadrebas->menupadrebas();
    }
    
    public function menuhijobas() {
        $CI = & get_instance();
        $CI->load->model('menu_model','menuhijobas'); 
        $url2 = $CI->uri->segment(1).'/' . $CI->uri->segment(2);
        $data = array('url2' => $url2);
        $CI->session->set_userdata($data);
        return $CI->menuhijobas->menuhijobas();
    }

    //Validar permisos
    public function validarpermisos() {
        $CI = & get_instance();
        $CI->load->model('menu_model','validarpermisos'); 
        $url1 = $CI->uri->segment(1);
        $url2 = $CI->uri->segment(1).'/' . $CI->uri->segment(2);
        $data = array('url1' => $url1,'url2'=>$url2);
        $CI->session->set_userdata($data);
        return $CI->validarpermisos->validarpermisos();        
    }

    public function verificaSubAcceso($Rnd, $n_class) {
        $this->input->post("Rnd");


        $CI = & get_instance();
        if ($UrlPadre == $CI->uri->segment(1) . '/' . $CI->uri->segment(2))
            $Rdn = "";
        $OpcionPadre = "";
    }



    //EVITAR INYECCION SQL - renzo probando
    public function FiltrarTexto($str, $html = true, $e = 'ISO-8859-15') {
        if (is_array($str)) {
            $final = array();

            foreach ($str as $param => $value)
                $final[$param] = self::FilterText($value, $html, $e);

            return $final;
        }

        if (!is_string($str))
            return $str;

        if (self::isUtf8($str))
            $e = 'UTF-8';

        $str = stripslashes(trim($str));

        if ($html)
            $str = htmlentities($str, ENT_QUOTES, $e, false);

        $str = self::escape($str);
        $str = str_replace('&amp;', '&', $str);
        $str = iconv($e, 'ISO-8859-15//TRANSLIT//IGNORE', $str);

        return nl2br($str);
    }

    public function isUtf8($str) {
        $len = strlen($str);

        for ($i = 0; $i < $len; $i++) {
            $c = ord($str[$i]);

            if ($c > 128) {
                if (($c > 247))
                    return false;
                else if ($c > 239)
                    $bytes = 4;
                else if ($c > 223)
                    $bytes = 3;
                else if ($c > 191)
                    $bytes = 2;
                else
                    return false;

                if (($i + $bytes) > $len)
                    return false;

                while ($bytes > 1) {
                    $i++;
                    $b = ord($str[$i]);

                    if ($b < 128 || $b > 191)
                        return false;

                    $bytes--;
                }
            }
        }

        return true;
    }

    function escape($str, $magic_quotes = false) {
        switch (gettype($str)) {
            case 'string' :
                $replaceQuote = "\\'"; /// string to use to replace quotes
                if (!$magic_quotes) {

                    if ($replaceQuote [0] == '\\') {
                        // only since php 4.0.5
                        //$str = seo_str_replace ( array ( '\\', "\0" ), array ( '\\\\', "\\\0" ), $str );
                        $str = str_replace("\0", "\\\0", str_replace('\\', '\\\\', $str));
                    }
                    return "'" . str_replace("'", $replaceQuote, $str) . "'";
                }

                // undo magic quotes for "
                $str = str_replace('\\"', '"', $str);

                if ($replaceQuote == "\\'") {// ' already quoted, no need to change anything
                return "'$str'";
                } else {// change \' to '' for sybase/mssql
                $str = str_replace('\\\\', '\\', $str);
                return "'" . str_replace("\\'", $treplaceQuote, $str) . "'";
            }
            break;
            case 'boolean' : $str = ($str === FALSE) ? 0 : 1;
            return $str;
            break;
            case 'integer' : $str = ($str === NULL) ? 'NULL' : $str;
            return $str;
            break;
            default : $str = ($str === NULL) ? 'NULL' : $str;
            return $str;
            break;
        }
    }

    // Encriptar cadenas con key predeterminada - Cuidado!, renzot probando
    function encrypt($string) {
        $result = '';
        for ($i = 0; $i < strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr(KEY_ENCRIPT, ($i % strlen(KEY_ENCRIPT)) - 1, 1);
            $char = chr(ord($char) + ord($keychar));
            $result.=$char;
        }
        return base64_encode($result);
    }

    // Desencriptar cadenas con key predeterminada - Cuidado!, renzot probando
    function decrypt($string) {
        $result = '';
        $string = base64_decode($string);
        for ($i = 0; $i < strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr(KEY_ENCRIPT, ($i % strlen(KEY_ENCRIPT)) - 1, 1);
            $char = chr(ord($char) - ord($keychar));
            $result.=$char;
        }
        return $result;
    }

    /* SIGMA GENERALES */
    /* PROBANDO HELPER PARA ENVIAR CASO - Cuidado!, jvinceso terminando */
    /* PROBANDO HELPER PARA ENVIAR CASO - Cuidado!, renzot probando */

    function enviar_caso_ren() {
        $CI = & get_instance();
        $nDocId = $CI->session->userdata("nDocId");
        $nEprId = $CI->session->userdata("nEprIdSiguiente");

        $CI->load->model('sigma/revisioninicial_Model', 'objRevisionInicial');
        $CI->load->model('sigma/enviar_caso_par_model', 'objEnviarCaso');

        $CI->objRevisionInicial->MovimientoQry(array($nDocId));
        $CI->objEnviarCaso->EtapaProcedimientoDecisionQry(array($nDocId, $CI->objRevisionInicial->getMovId()));
        $CI->objEnviarCaso->EtapaProcedimientoSiguienteQry(array($nDocId, $CI->objEnviarCaso->getPcaId(), $CI->objEnviarCaso->getParId(), $nEprId));
        $data['data'] = array($CI->objEnviarCaso->getPerNombres1(), $CI->objEnviarCaso->getEpriId2(), $nDocId, $nEprId, $CI->objEnviarCaso->getEpriId2(), $CI->objEnviarCaso->getPcaId(), $CI->objEnviarCaso->getParId());
        return $CI->load->view("sigma/enviarcasopar_view", $data);
    }

    //Cargar PLantilla 

    public function plantillaAtributoGet($accion) {
        $CI->adampt->setParam($accion[0]); //nDocId
        $CI->adampt->setParam($accion[1]); //nParId
        $CI->adampt->setParam($accion[2]); //nPcaId
        $CI->adampt->setParam($accion[3]); //nEprId
        $query = $CI->adampt->consulta("USP_GEN_S_PLANTILLA_ETAPA_ATRIBUTO_PorEtapayParametro");
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

    public function obtenerParametrosFormulario() {
        $CI->adampt->setParam($data[0]); //idDocumento
        $CI->adampt->setParam($data[1]); //AtributoId
        $query = $CI->adampt->consulta("USP_SIG_S_ETAPA_PROCEDIMIENTO_ATRIBUTO_cEpaDato");
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

    public function get_Listar_nParId_x_nPcaId() {
        $CI->adampt->setParam($data[0]); //idDocumento
        $CI->adampt->setParam($data[1]); //ParametroCatId
        $query = $CI->adampt->consulta("USP_SIG_S_ETAPA_PROCEDIMIENTO_ATRIBUTO_cEpaDato");
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
    }

    public function ubigeoGet($Parametros = array(),$n, $Default = null, $Transaccion = 'ins') {
        $CI = & get_instance();
        $CI->adampt->setParam($Parametros['ACCION']);
        $CI->adampt->setParam(2241);
        $CI->adampt->setParam($Parametros['IDDEPARTAMENTO']);
        $CI->adampt->setParam($Parametros['IDPROVINCIA']);
        $query = $CI->adampt->consulta("USP_GEN_S_UBIGEO");
        if (count($query) > 0) {
            $comboubigeo[''] = 'Seleccionar ' . $Parametros['ACCION'];
            foreach ($query as $query):
                $comboubigeo[$query['ID']] = $query['DESCRIPCION'];
            endforeach;

            return form_dropdown('cbo_' . $Transaccion . '_ubigeo_' . $Parametros['ACCION'].$n, $comboubigeo, $Default, 'id="cbo_' . $Transaccion . '_ubigeo_' . $Parametros['ACCION'].$n . '" style="width:auto;cursor:pointer;" class="chzn-select"');
        } else {
            $comboubigeo[''] = 'Seleccionar ' . $Parametros['ACCION'];
            return form_dropdown('cbo_' . $Transaccion . '_ubigeo_' . $Parametros['ACCION'].$n, $comboubigeo, $Default, 'id="cbo_' . $Transaccion . '_ubigeo_' . $Parametros['ACCION'].$n . '" style="width:auto;cursor:pointer;" class="chzn-select"');
        }
    }

}