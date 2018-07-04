
//buscador productos





var t = $('#tblProducto').DataTable(
		// {
  //               "columns": [
  //                   { "data": "sku", "orderable" : true },
  //                   { "data": "Nombre", "orderable": false },
  //                   { "data": "Precio", "orderable": true },
  //                   {
  //                       "render": function (data, type, JsonResultRow, meta) {
  //                           return '<img src="Content/'+JsonResultRow.ImageAddress+'">';
  //                       }
  //                   }
  //               ],
  //               "order": [[0, "asc"]]
		// }
		);

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
		                 '<img src="'+item.url_imagen+'" style="width: 100px">'
		                 

		       		]).draw(false);
			 });
		});

$( "#cboCategoria1" ).change(function (){

	var id = $('#cboCategoria1').val();
  	/*Se limpia las provincias y se selecciona otro producto*/
  	 $('#cboProducto1').html('<option>Selecciones un prodcuto</option>');
		
		$.post(site_url+"/Producto/getProductoCategoria",
		    {
		    	/*Aqui se envia la id de la categoria para buscar los productos*/
		        "PK_idCategoria": id 
		    },
		    function(data){
		    	alert("pasó");
			      var c = JSON.parse(data);
			       $.each(c,function(i,item){
			       	/*Se crea una lista de las provincias de la region seleccionada*/
			       	 $('#cboProducto1').append('<option value="'+item.idProductos+'">'+item.Nombre+'</option>');
			    });
			});
	});

$( "#cboCategoria2" ).change(function (){
  	/*Se limpia las provincias y se selecciona otro producto*/
  	 $('#cboProducto2').html('<option>Selecciones un prodcuto</option>');

		var id = $('#cboCategoria2').val();

		$.post(site_url+"/Producto/getProductoCategoria",
		    {
		    	/*Aqui se envia la id de la categoria para buscar los productos*/
		        "PK_idCategoria": id
		    },
		    function(data){
			      var c = JSON.parse(data);
			       $.each(c,function(i,item){
			       	/*Se crea una lista de las provincias de la region seleccionada*/
			       	 $('#cboProducto2').append('<option value="'+item.idProductos+'">'+item.Nombre+'</option>');
			    });
			});
	});



		 