

/* Formatting function for row details - modify as you need */
/*Formato que se la va a dar a la funcion de los datos que obtenemos de la BDD*/

function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Nombre completo:</td>'+
            '<td>'+d.Nombre+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Precio:</td>'+
            '<td>'+d.Precio+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>foto:</td>'+
            '<td><img src="'+item.url_imagen+'" style="width: 100px"></td>'+
        '</tr>'+
    '</table>';
 }

var t = $('#tblProductoEncargo').DataTable({

	  //    language: { 

	  //    	url: '../includes/datatable_ptbr.json' 

			// }, 

	  //   responsive: true,
	  //   ajax: {
	  //               type: 'POST',
	  //               url: site_url+"/Producto/getProducto",
	  //               data: {idstatus: opRadio},
	  //               success: function (msg) 
	  //               {
	  //                   return JSON.stringify(msg);
	  //                  // msg = $.parseJSON(msg);
	  //               }
	  //        }

	});

$.post(site_url+"/Producto/getProducto",
	    {/*parametro en este caso no se necesita ninguna parametro por que traemos las productos directamente de la BDD*/},
	    function(data){
	    	//alert(data);
		      var c = JSON.parse(data);
		       $.each(c,function(i,item){
		       	t.row.add([
		       			 '<button id="'+item.idProductos+'" type="button" class="btn btn-block btn-success"><i class="fa fa-check" ></i></button>',
			             item.Nombre,
		                 item.Precio,
		                 // item.Descripcion,
		                 // item.Disponibilidad,
		       		]).draw(false);
			 });
		});

 $('#tblProductoEncargo tbody').on('click', 'button.btn', function () {

 		var tr = $(this).closest('tr');
        var row = t.row( tr );
       	var id = this.id;

		 	 $.post(site_url+"/Producto/getProductoById",
			 {
			 	// parametro para llamadas directamente de la BDD
			    "idProductos": id
			 },
			    function(data){

		    });



        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            // tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            // tr.addClass('shown');
        	}

		  });



