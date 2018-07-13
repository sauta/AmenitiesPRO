function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Nombre del producto:</td>'+
            '<td>'+d.Nombre+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Stock Disponible:</td>'+
            '<td>'+d.stock+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Descripcion:</td>'+
            '<td>'+d.Descripcion+'</td>'+
        '</tr>'+
        '<tr>'+ 
            '<td>Foto:</td>'+
            '<td><img src="'+d.url_imagen+'"  class="rounded float-right"  width="100" height="100" ></td>'+
        '</tr>'+
    '</table>';
}

var t = $('#tblProducto').DataTable({
        "language": {
            "url": base_url+"js/clases/idioma-es-dt.json"
        },
        "ajax":{
        	"url": site_url+"/Producto/getProducto/",
        	"type": "POST",
        	dataSrc: ''
    			},
        "columns": [
            {
                "className":  'details-control',
                "orderable":  false,
                "data"     :  null,
                "defaultContent": '<button type="button" class="btn btn-block btn-info btn-flat"><i></i>Info</button>'
            },
            { "data": "sku"    },
            { "data": "Nombre" },
            { "data": "Precio" },
            { "data": "Descripcion" }
        ],

         "columnDefs": [
        {
          "targets": [3], 
          "data": "Precio", 
          "render": function(data, type, row) {
            return '$ '+data;              
              }
           }
        ],


        "order": [[1, 'asc']]
	});

    $('#tblProducto tbody').on('click', 'td.details-control', function () {
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
    } );