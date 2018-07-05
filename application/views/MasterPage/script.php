<!-- jQuery 3 -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- <script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/jquery-ui/jquery-ui.min.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button);
</script> -->
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- <script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/raphael/raphael.min.js"></script>

<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/morris.js/morris.min.js"></script> -->
<!-- Sparkline -->
<!-- <script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script> -->
<!-- jvectormap -->
<!-- <script src="<?=base_url()?>AdminLTE-2.4.2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> -->
<!-- <script src="<?=base_url()?>AdminLTE-2.4.2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/jquery-knob/dist/jquery.knob.min.js"></script> -->
<!-- Bootstrap WYSIHTML5 -->
<!-- <script src="<?=base_url()?>AdminLTE-2.4.2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
<!-- Slimscroll -->
<!-- <script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> -->
<!-- FastClick -->
<!-- <script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/fastclick/lib/fastclick.js"></script> -->
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

<script type="text/javascript">
		
			 var site_url = '<?=site_url()?>';

</script>

<!-- generico -->
  <?php if($this->uri->segment(2)=='cpanel'){?>





  <?php }?>
  <?php if($this->uri->segment(2)=='perfil'){?>
  	<script type="text/javascript">
	
		 var site_url = '<?=site_url()?>'; 
</script>
<!-- asignar el JS de perfil correspondiente -->
<script src="<?=base_url()?>js/clases/????????.js"></script>

  <?php }?>

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

<!-- cliente -->
  <?php if($this->uri->segment(2)=='consumo'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='facturas'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='estadisticas_de_pedidos'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='encargadado'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='encargar'){?>

  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>
    <script src="js/clases/Pedidos.js"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='compra'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='factura'){?>

  	<script src="<?=base_url()?>AdminLTE-2.4.2/bower_components/chart.js/Chart.js"></script>

    

  <?php }?>
  <?php if($this->uri->segment(2)=='ofertas'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='pedidos'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='prueba'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>

<!-- adminitrador -->

  <?php if($this->uri->segment(2)=='categorias'){?>
	<script src="<?=base_url()?>js/clases/categorias.js"></script>

  <?php } ?>
  <?php if($this->uri->segment(2)=='estadisticas_de_facturas'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='estadisticas_de_pedidos'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='estadisticas_de_ventas'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='clientes'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='facturas'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='demanda'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='envio_de_ofertas'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>
  <?php if($this->uri->segment(2)=='reportes'){?>
  	<script src="<?=base_url()?>AdminLTE-2.4.2/"></script>

  <?php }?>

  <?php if($this->uri->segment(1)=='Registro'){?>

     <script type="text/javascript">
                 var site_url = '<?=site_url()?>/'; 
      </script>
      <script type="text/javascript" src="js/clases/Direccion" ></script>>

  <?php }?>

  <?php if($this->uri->segment(2)=='facturas'){?>
      <script type="text/javascript">
                 var site_url = '<?=site_url()?>/'; 
      </script>
        <script src="<?=base_url()?>js/clases/Facturas.js"></script>
        <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
  <?php } ?>

  <?php if($this->uri->segment(2)=='encargar'){?>
    <link rel="stylesheet" href="<?=base_url()?>AdminLTE-2.4.2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <?php }?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


<!--********************************   Faturas ****************************** -->


</body>

<script>

 $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.


    var areaChartCanvas = $('#areaChart').get(0).getContext('2d');

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas);

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Jabon',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },

        {
          label               : 'Shampoo',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    }

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : true,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true,

    }
      // Chart.defaults.global.legend.display = true;
             //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions)  
  });
</script>


</html>