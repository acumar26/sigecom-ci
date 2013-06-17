</div>
    <!-- END PAGE CONTAINER-->    
</div>
<!-- END PAGE -->

</div>
   <!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
   <div class="footer">
      2013 &copy; SIGECOM. Derechos reservados.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-angle-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
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
   <script src="<?php echo URL_PG ?>uniform/jquery.uniform.min.js" type="text/javascript" ></script> 
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
    
   <script type="text/javascript" src="<?php echo URL_PG ?>bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   
   
   <script type="text/javascript" src="<?php echo URL_PG ?>select2/select2.min.js"></script>
   <script type="text/javascript" src="<?php echo URL_PG ?>data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="<?php echo URL_PG ?>data-tables/DT_bootstrap.js"></script>
   <script type="text/javascript" src="<?php echo URL_PG ?>jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
   
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="<?php echo URL_JS ?>app.js" type="text/javascript"></script>
   <script src="<?php echo URL_JS ?>index.js" type="text/javascript"></script>   
   <script src="<?php echo URL_JS ?>table-managed.js"></script>
    
   <!-- END PAGE LEVEL SCRIPTS -->  
   <script>
      jQuery(document).ready(function() {    
         App.init(); // initlayout and core plugins
         //Index.init();
         //Index.initJQVMAP(); // init index page's custom scripts
         //Index.initCalendar(); // init index page's custom scripts
         //Index.initCharts(); // init index page's custom scripts
         //Index.initChat();
         //Index.initMiniCharts();
         //Index.initDashboardDaterange();
         //Index.initIntro();
         //Charts.init();
         //Charts.initCharts();
         //Charts.initPieCharts();
         //TableManaged.init();
      });
   </script>

</html>
