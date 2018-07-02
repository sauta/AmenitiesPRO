<!-- jQuery 3 -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/raphael/raphael.min.js"></script>

<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?=base_url()?>AdminLTE-2.4.2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url()?>AdminLTE-2.4.2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url()?>AdminLTE-2.4.2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>AdminLTE-2.4.2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url()?>AdminLTE-2.4.2/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>AdminLTE-2.4.2/dist/js/demo.js"></script>

<!-- <script src="base_url()?>AdminLTE-2.4.2/plugins/input-mask/jquery.inputmask.phone.extensions.js"></script> -->
<script src="<?=base_url()?>AdminLTE-2.4.2/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?=base_url()?>AdminLTE-2.4.2/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?=base_url()?>AdminLTE-2.4.2/plugins/input-mask/jquery.inputmask.extensions.js"></script>


<!--********************************   Faturas ****************************** -->
<?php if($this->uri->segment(2)=='facturas'){?>
	<script type="text/javascript">
             var site_url = '<?=site_url()?>/'; 
	</script>
    <script src="<?=base_url()?>js/clases/Facturas.js"></script>
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<?php } ?>

<?php if($this->uri->segment(2)=='productos'){?>

	<!-- DataTables -->
	<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

	<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

	<script type="text/javascript">
		
			 var site_url = '<?=site_url()?>'; 
	</script>

	<script src="<?=base_url()?>js/clases/Productos.js"></script>
	
	<script src="<?=base_url()?>js/clases/Categorias.js"></script>
<?php } ?>

<?php if($this->uri->segment(2)=='categorias'){?>
	<script type="text/javascript">
		
			 var site_url = '<?=site_url()?>'; 
	</script>
	<script src="<?=base_url()?>js/clases/categorias.js"></script>
<?php } ?>
</body>
</html>