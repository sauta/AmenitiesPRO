
//buscador productos


// $('#tblProducto').DataTable()


// $.post(site_url+"/Producto/getProducto",
// 	    {/*parametro en este caso no se necesita ninguna parametro por que traemos las productos directamente de la BDD*/},
// 	    function(data){
// 	    	//alert(data);
// 		      var c = JSON.parse(data);
// 		       $.each(c,function(i,item){
// 		       	 $('#tblProducto').append(
// 		             '<tr>\n'+
// 		       	 	      '<td>'+item.sku+'</td>\n'+
// 		                  '<td>'+item.Nombre+'</td>\n'+
// 		                  '<td>'+item.Precio+'</td>\n'+
// 		                  '<td>\n'+
// 		                  '<img alt="Product Image" style="width: 100px" src="'+item.url_imagen+' "</td>\n'+
// 		             '</tr>\n'
// 		       	   );
// 			 });
// 		});

$( "#cboCategoria1" ).change(function (){
  	/*Se limpia las provincias y se selecciona otro producto*/
  	 $('#cboProducto1').html('<option>Selecciones un prodcuto</option>');

	$('#cboCategoria1 option:selected').each(function(){
		var id = $('#cboCategoria1').val();
		$.post(site_url+"/Producto/getProductoCategoria",
		    {
		    	/*Aqui se envia la id de la categoria para buscar los productos*/
		        "PK_idCategoria": id 
		    },
		    function(data){
		    	alert("pasó")
			      var c = JSON.parse(data);
			       $.each(c,function(i,item){
			       	/*Se crea una lista de las provincias de la region seleccionada*/
			       	 $('#cboProducto1').append('<option value="'+item.idProductos+'">'+item.Nombre+'</option>');
			    });
			});
		});
	});

$( "#cboCategoria2" ).change(function (){
  	/*Se limpia las provincias y se selecciona otro producto*/
  	 $('#cboProducto2').html('<option>Selecciones un prodcuto</option>');

	$('#cboCategoria2 option:selected').each(function(){
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
	});



		 