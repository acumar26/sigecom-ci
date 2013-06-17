<div class="portlet box yellow ">
    <div class="portlet-title">
        <div class="caption"><i class="icon-file"></i>Nuevo usuario</div>                        
    </div>

    <div class="portlet-body form">    
        <!-- BEGIN FORM-->
        <form action="#" id="frmusuario" class="form-horizontal">
            <br>
            <h3 class="form-section">Datos personales</h3>
            <div class="row-fluid" >
                <div class="span6" >
                    <div id="valerroresctrl" class="control-group">
                        <label class="control-label">DNI<span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" name="txt_dni" id="txt_dni" maxlength="8" class="span10"/>
                            <div id="valerrores" ></div>
                        </div>
                    </div>
                </div>
                <div class="span6" >
                    <div class="control-group">
                        <label class="control-label">Apellidos<span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" name="txt_apellidos" id="txt_apellidos"  class="span10"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid" >
                <div class="span6" >
                    <div class="control-group">
                        <label class="control-label">Nombres<span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" name="txt_nombres" id="txt_nombres" class="span10"/>
                        </div>
                    </div>
                </div>
                <div class="span6" >
                    <div class="control-group">
                        <label class="control-label">Sexo<span class="required">*</span></label>
                        <div class="controls">                           
                            <select id="cbo_sexo" name="cbo_sexo" >
                                <option value="" ></option>
                                <?php if ($masterSexo){ ?>
                                <?php foreach ($masterSexo as $key => $sexo) { ?>    
                                <option value="<?php echo $sexo['nidmaster'] ?>" ><?php echo $sexo['cmaster'] ?></option>
                                <?php }} ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid" >
                <div class="span6" >
                    <div class="control-group">
                        <label class="control-label">Fec. Nacimiento<span class="required">*</span></label>
                        <div class="controls">                             
                            <input type="text" name="txt_fnac" id="txt_fnac" maxlength="10" class="span10"/>
                        </div>
                    </div>
                </div>
                <div class="span6" >
                    <div class="control-group">
                        <label class="control-label">Correo<span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" name="txt_correo" id="txt_correo" class="span10"/>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="form-section">Usuario</h3>
            <div class="row-fluid" >
                <div class="span6" >
                    <div class="control-group">
                        <label class="control-label">Usuario<span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" name="txt_usuario" id="txt_usuario"  class="span10"/>
                        </div>
                    </div>
                </div>
                <div class="span6" >
                    <div class="control-group">
                        <label class="control-label">Contraseña<span class="required">*</span></label>
                        <div class="controls">
                            <input type="password" name="txt_contrasena" id="txt_contrasena" class="span10"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="control-group form-actions">
                <button type="submit" class="btn green"> <i class="icon-save" ></i> Guardar</button>                              
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>