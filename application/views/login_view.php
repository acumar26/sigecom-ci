<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <title> ..: SIGECOM - Sistema de Gestión Comercial | Iniciar sesion ::.. </title>  
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="YugoCorp, YugoFrio, GrunpoDN, SIGECOM" name="description" />
        <meta content="Marlon García Zárate" name="author" />
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
        <link href="<?php echo URL_CSS ?>pages/login.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <script src="<?php echo URL_PG ?>jquery-1.8.3.min.js" type="text/javascript"></script> 
        <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->  
        <script src="<?php echo URL_PG ?>jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>    
        <script src="<?php echo URL_PG ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_PG ?>uniform/jquery.uniform.min.js" type="text/javascript" ></script>
        <script src="<?php echo URL_PG ?>jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <img src="<?php echo URL_IMG ?>logo-login.png" alt="" /> 
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form id="frmlogin" method="POST" class="form-vertical login-form" >
                <h3 class="form-title">Ingresar al sistema</h3>
                <div id="mensaje" ></div>                    
                <div class="control-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Usuario:</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input required class="m-wrap placeholder-no-fix" type="text"  placeholder="Ingrese su usuario" name="txt_usuario" id="txt_usuario"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label visible-ie8 visible-ie9">Contraseña:</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-lock"></i>
                            <input required class="m-wrap placeholder-no-fix" type="password"  placeholder="Ingrese su contraseña" name="txt_contrasena" id="txt_contrasena"/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
<!--                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1"/> Remember me
                    </label>-->
                    <button type="submit" class="btn green pull-right">
                        Acceder <i class="m-icon-swapright m-icon-white"></i>
                    </button>            
                </div>
<!--                <div class="forget-password">
                    <h4>Forgot your password ?</h4>
                    <p>
                        no worries, click <a href="javascript:;" class="" id="forget-password">here</a>
                        to reset your password.
                    </p>
                </div>-->
<!--                <div class="create-account">
                    <p>
                        Don't have an account yet ?&nbsp; 
                        <a href="javascript:;" id="register-btn" class="">Create an account</a>
                    </p>
                </div>-->
            </form>
            <!-- END LOGIN FORM -->
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright">
            2013 &copy; SIGECOM. Derechos reservados.
        </div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        
        <!--[if lt IE 9]>
        <script src="<?php echo URL_PG ?>excanvas.js"></script>
        <script src="<?php echo URL_PG ?>respond.js"></script> 
        <![endif]-->  
        <script src="<?php echo URL_PG ?>breakpoints/breakpoints.js" type="text/javascript"></script>  
        <!-- IMPORTANT! jquery.slimscroll.min.js depends on jquery-ui-1.10.1.custom.min.js -->  
        <script src="<?php echo URL_PG ?>jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_PG ?>jquery.blockui.js" type="text/javascript"></script> 
        <script src="<?php echo URL_PG ?>jquery.cookie.js" type="text/javascript"></script>
        
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        
        
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo URL_JS ?>app.js" type="text/javascript"></script>
        <script src="<?php echo URL_JS ?>js/login.js" type="text/javascript"></script>      
        <!-- END PAGE LEVEL SCRIPTS --> 
       
        <!-- END JAVASCRIPTS -->
        </body>
    <!-- END BODY -->
    
</html>