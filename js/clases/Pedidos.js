

/* Formatting function for row details - modify as you need */
/*Formato que se la va a dar a la funcion de los datos que obtenemos de la BDD*/
var t = $('#tblProductoEncargo').DataTable();

$.post(site_url+"/Producto/getProducto",
	    {/*parametro en este caso no se necesita ninguna parametro por que traemos las productos directamente de la BDD*/},
	    function(data){
	    	//alert(data);
		      var c = JSON.parse(data);
		       $.each(c,function(i,item){
		       	t.row.add([

					     item.sku,
			             item.Nombre,
		                 item.Precio,
		                 // item.Descripcion,
		                 // item.Disponibilidad,
		       		]).draw(false);

			 });
		});




function format ( item ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Nombre:</td>'+
            '<td>'+item.sku+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+item.Nombre+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+item.Descripcion+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extra info:</td>'+
            '<td><img src="'+item.url_imagen+'" style="width: 100px"></td>'+
        '</tr>'+
    '</table>';
}
 
  	  "id": "1",
      "name": "Tiger Nixon",
      "position": "System Architect",
      "salary": "$320,800",
      "start_date": "2011/04/25",
      "office": "Edinburgh",
      "extn": "5421"

$(document).ready(function() {
    var table = $('#tblProductoEncargo').DataTable( {
        "ajax": "../ajax/data/objects.txt",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "salary" }
        ],
        "order": [[1, 'asc']]
    } );
     
    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
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
} );








$.post(site_url+"Pedidos/getPedidos",
    {/*parametro en este caso no se necesita ninguna parametro por que traemos las pedidos directamente de la BDD*/},
    function(data){
    	//alert(data);
	      var c = JSON.parse(data);
	       $.each(c,function(i,item){
	       	 $('#cboRegion').append('<option value="'+item.idPedido+'">'+item.Pedidos+'</option>');
	    });
	});


