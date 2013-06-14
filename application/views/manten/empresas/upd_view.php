<script src="<?php echo URL_JS ?>empresa/jsEmpresaUpd.js" ></script>

<div class="portlet box yellow ">
    <div class="portlet-title">
        <div class="caption"><i class="icon-edit"></i>Editar empresas</div>                        
    </div>
<div class="portlet-body form">    
    <!-- BEGIN FORM-->
    <form action="#" id="frmupdempresa" class="form-horizontal">
        <br>
        <input type="hidden" name="txte_nidempresa" id="txte_nidempresa"  class="span6" value="<?php echo $editarEmpresas['nidempresa'] ?>" />
        <div class="control-group">
            <label class="control-label">Empresa<span class="required">*</span></label>
            <div class="controls">
                <input type="text" name="txte_empresa" id="txte_empresa" class="span6" value="<?php echo $editarEmpresas['cempresa'] ?>" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Alias<span class="required">*</span></label>
            <div class="controls">
                <input type="text" name="txte_alias" id="txte_alias" class="span6" value="<?php echo $editarEmpresas['calias'] ?>" />
            </div>
        </div>        
        <div class="control-group form-actions">
            <button type="submit" class="btn red"> <i class="icon-refresh" ></i> Actualizar</button>                              
        </div>
    </form>
    <!-- END FORM-->
</div>
    </div>