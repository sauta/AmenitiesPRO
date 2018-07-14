

function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Nombre del Encargado:</td>'+
            '<td>'+d.Nombre+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Rut del Encargado:</td>'+
            '<td>'+d.Rut+'</td>'+
        '</tr>'+
    '</table>';
}

var t = $('#tblEncargados').DataTable({
        "language": {
            "url": base_url+"js/clases/idioma-es-dt.json"
        },
        "ajax":{
        	"url": site_url+"/Encargado/getEncargado/",
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
            { "data": "Nombre" },
            { "data": "Rut" }
        ],

         "columnDefs": [
        {
            //
          "targets": [1], 
          "data": "Nombre", 
          "render": function(data, type, row) {
            return data;              
              }
           }
        ],

        "order": [[1, 'asc']]
	});

    $('#tblEncargados tbody').on('click', 'td.details-control', function () {
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