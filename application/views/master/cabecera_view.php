<!DOCTYPE html>


<head>
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <title>..:: Sistema de Gestion Comercial | <?php echo $titulo?> ::..</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   <link href="<?php echo URL_PG ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo URL_PG ?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo URL_PG ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo URL_CSS ?>style-metro.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo URL_CSS ?>style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo URL_CSS ?>style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo URL_CSS ?>themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo URL_PG ?>uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL STYLES --> 
   <link href="<?php echo URL_PG ?>gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo URL_PG ?>bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo URL_PG ?>fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo URL_PG ?>jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
   <link href="<?php echo URL_PG ?>jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
   <!-- END PAGE LEVEL STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
         <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="<?php echo URL_MAINDAS?>index">
            <img src="<?php echo URL_IMG ?>logo-dashboard.png" alt="logo" />
            </a>
            
              <div class="navbar hor-menu ">
               <div class="navbar-inner">
                  <ul class="nav">                                         
                     <li class="active">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                        Empresas
                        <span class="arrow"></span>     
                        </a>
                        <ul class="dropdown-menu">
                           <li><a href="#">YugoCorp</a></li>
                           <li><a href="#">YugoFrio</a></li>
                           <li><a href="#">Grupo DN</a></li>                                                      
                        </ul>
                        <b class="caret-out"></b>                        
                     </li>                     
                     <li>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Oficinas
                        <span class="arrow"></span>
                        </a>
                        <ul class="dropdown-menu">
                           <li><a href="index.html">Trujillo</a></li>
                           <li><a href="index.html">Chiclayo</a></li>                           
                        </ul>
                        <b class="caret-out"></b>                        
                     </li>                     
                  </ul>
               </div>
            </div>
            
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
            <img src="<?php echo URL_IMG ?>menu-toggler.png" alt="" />
            </a>          
            <!-- END RESPONSIVE MENU TOGGLER -->            
            <!-- BEGIN TOP NAVIGATION MENU -->              
            <ul class="nav pull-right">
               <!-- BEGIN NOTIFICATION DROPDOWN -->                  
               <!-- END NOTIFICATION DROPDOWN -->
               <!-- BEGIN INBOX DROPDOWN -->
               
               <!-- END INBOX DROPDOWN -->
               <!-- BEGIN TODO DROPDOWN -->
               
               <!-- END TODO DROPDOWN -->
               <!-- BEGIN USER LOGIN DROPDOWN -->
               <li class="dropdown user">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!--<img alt="" src="<?php echo URL_IMG ?>avatar1_small.jpg" />-->
                  <span class="username"><?php echo $this->session->userdata('cusuario') ?></span>
                  <i class="icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="#"><i class="icon-user"></i> Mi Perfil</a></li>
                     
                     <li><a href="#"><i class="icon-lock"></i> Cambiar clave</a></li>
                     <li class="divider"></li>
                     <li><a href="<?php echo URL_MAINDAS ?>logout"><i class="icon-key"></i> Cerrar sesion</a></li>
                  </ul>
               </li>
               <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU --> 
         </div>
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   
   <!-- BEGIN CONTAINER -->
   <div class="page-container">