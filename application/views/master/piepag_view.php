</div>
    <!-- END PAGE CONTAINER-->    
</div>
<!-- END PAGE -->

</div>
   <!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
   <div class="footer">
      2013 &copy; Metronic by keenthemes.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-angle-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->
   <script src="<?php echo URL_PG ?>jquery-1.8.3.min.js" type="text/javascript"></script>   
   <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->  
   <script src="<?php echo URL_PG ?>jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
   <script src="<?php echo URL_PG ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
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
   <script src="<?php echo URL_PG ?>jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
   <script src="<?php echo URL_PG ?>jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
   <script src="<?php echo URL_PG ?>jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
   <script src="<?php echo URL_PG ?>jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
   <script src="<?php echo URL_PG ?>jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
   <script src="<?php echo URL_PG ?>jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
   <script src="<?php echo URL_PG ?>jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
   <script src="<?php echo URL_PG ?>flot/jquery.flot.js" type="text/javascript"></script>
   <script src="<?php echo URL_PG ?>flot/jquery.flot.resize.js" type="text/javascript"></script>
   <script src="<?php echo URL_PG ?>jquery.pulsate.min.js" type="text/javascript"></script>
   <script src="<?php echo URL_PG ?>bootstrap-daterangepicker/date.js" type="text/javascript"></script>
   <script src="<?php echo URL_PG ?>bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
   <script src="<?php echo URL_PG ?>gritter/js/jquery.gritter.js" type="text/javascript"></script>
   <script src="<?php echo URL_PG ?>fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
   <script src="<?php echo URL_PG ?>jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="<?php echo URL_PG ?>jquery.sparkline.min.js" type="text/javascript"></script>  
   
  
   <script src="<?php echo URL_PG ?>flot/jquery.flot.stack.js"></script>
   
   
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="<?php echo URL_JS ?>app.js" type="text/javascript"></script>
   <script src="<?php echo URL_JS ?>index.js" type="text/javascript"></script>   
   <script src="<?php echo URL_JS ?>charts.js"></script>  
   <!-- END PAGE LEVEL SCRIPTS -->  
   <script>
      jQuery(document).ready(function() {    
         App.init(); // initlayout and core plugins
         Index.init();
         //Index.initJQVMAP(); // init index page's custom scripts
         //Index.initCalendar(); // init index page's custom scripts
         Index.initCharts(); // init index page's custom scripts
         //Index.initChat();
         //Index.initMiniCharts();
         Index.initDashboardDaterange();
         //Index.initIntro();
         //Charts.init();
         //Charts.initCharts();
         //Charts.initPieCharts();
      });
   </script>

</html>
