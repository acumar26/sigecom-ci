
<div class="portlet box yellow ">
    <div class="portlet-title">
        <div class="caption"><i class="icon-reorder"></i>Lista de empresas</div>                        
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_2">
            <thead>
                <tr>                               
                    <th class="span2" >Opciones</th>
                    <th class="span5" >Empresa</th>
                    <th class="span3" >Alias</th>
                    <th class="span2" >Estado</th>

                </tr>
            </thead>
            <tbody>
                <?php if ($buscarEmpresas){ ?>
                <?php foreach ($buscarEmpresas as $key => $listar) { ?>                
                 <tr  class="odd gradeX">                                 
                    <td>
                        <button class="green btn mini" onclick="editarEmpresas('<?php echo $listar['nidempresa'] ?>');" ><i class="icon-pencil"  ></i> Editar</button>
                        <button class="purple btn mini" onclick="estadoEmpresas('<?php echo $listar['nidempresa'] ?>');" ><i class="icon-undo"></i> Estado</button>
                    </td>
                    <td><?php echo $listar['cempresa'] ?></td>
                    <td ><?php echo $listar['calias'] ?></td>
                    <td><span class="label <?php echo $listar['classestado'] ?>"><?php echo $listar['nestado'] ?></span></td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
</div>

<script>    
    jQuery(document).ready(function() {
        TableManaged.init();
    });
</script>