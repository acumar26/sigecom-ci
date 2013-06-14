<script src="<?php echo URL_JS ?>empresa/jsEmpresa.js" ></script>


<div class="row-fluid">
    <div class="span12">                  
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <br />
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="#">Inicio</a>
                <i class="icon-angle-right"></i></li>
            <li><a href="#">Mantenimiento</a></li>
            <i class="icon-angle-right"></i></li>
            <li><a href="#">Empresas</a></li>
            <li class="pull-right no-text-shadow"></li>

        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>

<div class="row-fluid ">
               <div class="span12">
                  <!-- BEGIN TAB PORTLET-->   
                  <div class="portlet box blue tabbable">
                     <div class="portlet-title">
                        <div class="caption"><i class="icon-asterisk"></i>Registro de empresas</div>
                     </div>
                     <div class="portlet-body">
                        <div id="tab" class="tabbable portlet-tabs">
                           <ul class="nav nav-tabs">                               
                               <li><a id="tab_nuevo" href="#0" data-toggle="tab">Nuevo</a></li>                              
                              <li class="active" ><a id="tab_buscar" href="#1" data-toggle="tab">Buscar</a></li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane active" id="1">
                                 
                                  <div id="mostrar_qry"></div>
                                  <?php //$this->load->view('manten/empresas/query_view');  ?>
                                 
                              </div>
                               <div class="tab-pane" id="0">
                                 
                                  <?php $this->load->view('manten/empresas/ins_view');  ?>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END TAB PORTLET-->
               </div>             
            </div>