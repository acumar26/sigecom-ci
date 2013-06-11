<?php

        //Cargar opciones de basicas
        $menupadrebasica = $this->cargas->menupadrebas();
        $menuhijobasica = $this->cargas->menuhijobas();
        //Cargar opciones de usuario
        $menupadreusuario = $this->cargas->menupadreusu();
        $menuhijousuario = $this->cargas->menuhijousu();
        
        $valurl1  = $this->session->userdata('url1'); 
        $valurl2  = $this->session->userdata('url2');            
        
?>

<!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->        	<ul>
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
<!--        <li class="start active ">
            <a href="<?php //echo URL_MAINDAS ?>index">
                <i class="icon-home"></i> 
                <span class="title">Inicio</span>
                <span class="selected"></span>
            </a>
        </li>-->


        <?php
        
        if ($menupadrebasica) {            
            $valurl = $this->session->userdata('url');            
            foreach ($menupadrebasica as $key => $padrebasica) {
                ?>        
                <li <?php if ($padrebasica['csegmentos']==$valurl1) { ?> class="start active" <?php } ?> >
                    <a href="javascript:;">
                        <i class="<?php echo $padrebasica['cvineta'] ?>"></i> 
                        <span class="title"><?php echo $padrebasica['copcion'] ?></span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">                            
                        <?php
                        foreach ($menuhijobasica as $key => $hijobasica) {
                            if ($padrebasica['nidopcion'] == $hijobasica['cvalor']) {
                                ?>
                                <li <?php if ($hijobasica['cruta']==$valurl2) { ?> class="active" <?php } ?> >
                                    <a href="<?php echo URL_MAINDAS . $hijobasica['cruta'] ?>">
                                        <?php echo $hijobasica['copcion'] ?>
                                    </a>
                                </li>                              
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </li>

                <?php
            }
        }
        ?>

        <?php
        
        if ($menupadreusuario) {            
            foreach ($menupadreusuario as $key => $padreusuario) {
                ?> 
                
                <li <?php if ($padreusuario['csegmentos']==$valurl1) { ?> class="start active" <?php } ?> >
                    <a href="javascript:;">
                        <i class="<?php echo $padreusuario['cvineta'] ?>"></i> 
                        <span class="title"><?php echo $padreusuario['copcion'] ?></span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">                            
                        <?php
                        foreach ($menuhijousuario as $key => $hijousuario) {
                            if ($padreusuario['nidopcion'] == $hijousuario['cvalor']) {
                                ?>
                                <li <?php if ($hijousuario['cruta']==$valurl2) { ?> class="active" <?php } ?> >
                                    <a href="<?php echo URL_MAINDAS . $hijousuario['cruta'] ?>">
                                        <?php echo $hijousuario['copcion'] ?>
                                    </a>
                                </li>                              
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </li>

                <?php
            }
        }
        ?>

    </ul>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->

<!-- BEGIN PAGE -->
<div class="page-content">         
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">