
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->        	<ul>
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li class="start active ">
            <a href="index">
                <i class="icon-home"></i> 
                <span class="title">Inicio</span>
                <span class="selected"></span>
            </a>
        </li>

        <?php 
        if ($menupadrebasica) {

            foreach ($menupadrebasica as $key => $padrebasica) {
                ?>        
                <li class="">
                    <a href="javascript:;">
                        <i class="icon-th-list"></i> 
                        <span class="title"><?php echo $padrebasica['copcion'] ?></span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">                            
                            <?php if ($menupadrebasica['nidopcion']==$menuhijobasica[0]['nidopcion']) {
                            foreach ($menuhijobasica as $key => $hijobasica) { ?>
                            <li >
                                <a href="<?php echo $hijobasica[0]['cruta'] ?>">
                                <?php echo $hijobasica[0]['copcion'] ?>
                                </a>
                            </li>                              
                            <?php }} ?>
                    </ul>
                </li>

            <?php }  }  ?>

<!--        <li class="">
            <a href="javascript:;">
                <i class="icon-bookmark-empty"></i> 
                <span class="title">Config. del sistema</span>
                <span class="arrow "></span>
            </a>

            <ul class="sub-menu">
                <li >
                    <a href="ui_general.html">
                        Persona	
                    </a>
                </li>
                <li >
                    <a href="ui_buttons.html">
                        Usuario	
                    </a>
                </li>                
            </ul>
        </li>-->


        <?php
        if ($menupadreusuario) {

            foreach ($menupadreusuario as $key => $padreusuario) {
                ?>        
                <li class="">
                    <a href="javascript:;">
                        <i class="icon-th-list"></i> 
                        <span class="title"><?php echo $padreusuario['copcion'] ?></span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                                <?php foreach ($menuhijousuario as $key => $hijousuario) { ?>
                            <li >
                                <a href="<?php echo $hijousuario['cruta'] ?>">
                                <?php echo $hijousuario['copcion'] ?>
                                </a>
                            </li>
                <?php } ?>
                    </ul>
                </li>

    <?php }
}
?>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->

