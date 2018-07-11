

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
            '<td><img src="'+d.url_imagen+'" style="width: 100px"></td>'+
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
                defaultContent: '<button type="button" class="btn btn-block btn-info btn-flat">Info</button>'

            },
            { "data": "Nombre"    },
            { "data": "Precio" }

        ],
        "order": [[1, 'asc']]
    
		
	});

 $('#tblProductoEncargo tbody').on('click', 'td.details-control', function () {

 		 var tr = $(this).closest('tr');
        var row = t.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }


		  });


