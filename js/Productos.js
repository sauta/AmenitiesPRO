
//buscador productos


$('#tblProducto').DataTable()


$.post(site_url+"/Producto/getProducto",
	    {/*parametro en este caso no se necesita ninguna parametro por que traemos las productos directamente de la BDD*/},
	    function(data){
	    	//alert(data);
		      var c = JSON.parse(data);
		       $.each(c,function(i,item){
		       	 $('#tblProducto').append(
		              '<tr>\n'+
		       	 	      '<td>'+item.sku+'</td>\n'+
		                  '<td>'+item.Nombre+'</td>\n'+
		                  '<td>'+item.Precio+'</td>\n'+
		                  '<td>'+'<img src="'+item.url_imagen+'"</td>\n'+
		              '</tr>\n'
		       	 	);
			 });
		});



		 