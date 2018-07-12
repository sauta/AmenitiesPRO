

/* Formatting function for row details - modify as you need */
/*Formato que se la va a dar a la funcion de los datos que obtenemos de la BDD*/

function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Nombre completo: </td>'+
            '<td> '+d.Nombre+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Precio:</td>'+
            '<td> <h3> <leable class="precio" value="'+d.Precio+'">$ '+d.Precio+'<leable> </h3></td>'+
        '</tr>'+
            '<td> <label>Cantidad</label> </td>'+
            '<td> <input type="text" class="form-control"> </td>'+
        '<tr>'+
            '<td>Descripcion:</td>'+
            '<td>'+d.Descripcion+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>foto:</td>'+
            '<td><img src="'+d.url_imagen+'" class="rounded float-right"  width="100" height="100" ></td>'+
        '</tr>'+
        '<tr>'+
            '<td> <button type="button" class="btn btn-block  btn-success btn-xs">Agregar</button> </td>'+
        '</tr>'+
    '</table>';
 }

var t = $('#tblProductoEncargo').DataTable({

		lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
		order: [[1, 'asc']],
		
        language: {
            "url": base_url+"js/clases/idioma-es-dt.json"
        },
        ajax:{
            "url": site_url+"/Producto/getProducto/",
            "type": "POST",
            dataSrc: ''
                },
        columns: [
            {
                className:   'details-control',
                orderable:   false,
                data:        null,
                defaultContent: '<button type="button" class="btn btn-block btn-info btn-flat">Información</button>'

            },
            { "data": "Nombre"    },
            { "data": "Precio" }

        ],
        "order": [[1, 'asc']]
    
		
	});

 $('#tblProductoEncargo tbody').on('click', 'td.details-control', function () {

 		var tr = $(this).closest('tr');
        // var btn = $(this).closest('button');
        var row = t.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
            // btn.removeClass('btn-info');
            // btn.addClass('btn-danger');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
            // btn.addClass('btn-info');
            //  btn.removeClass('btn-danger');
        }


		  });


        // var t = $('#tablaFactura').DataTable();
        //     var counter = 1;
        //     $(".btn").click(function()
        //     {
        //         alert("The paragraph was clicked.");
        //         t.row.add( [
        //             ,
        //             ,
        //             ,
        //             ,
                    

        //         ] ).draw( false );
         
        //         // counter++;
        //     } );
