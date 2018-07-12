<?php
header( string: "Content-Type: application/force-download");;
header( string: "Content-Type: application/octet-stream");
header( string: "Content-Type: application/download");
header( string: "Content-Type: application/vnd.ms-excel; ");
?>

<table id="tblProducto" border="0" class="table table-bordered table-hover">
  <thead>
    <tr>
      <th style="width: 10px"></th>
      <th style="width: 5%">SKU</th>
      <th style="width: 34%">Nombre</th>
      <th style="width: 10%">Precio CLP</th>
      <th style="width: 40%">Descripción</th>
      <!-- <th style="width: 40%">Disponibilidad</th> -->
      </tr>
    </thead>

      <?php foreach ($items_productos as $productos) { ?>
        <?php
          
        ?>
      }

    <tfoot>
      <tr>
      <th style="width: 10px"></th>
      <th style="width: 5%">SKU</th>
      <th style="width: 34%" >Nombre</th>
      <th style="width: 15%">Precio CLP</th>
      <th style="width: 40%">Descripción</th>
      <!-- <th style="width: 40%">Disponibilidad</th> -->
    </tfoot> 
</table>

