
//buscador productos
$.post(site_url+"/Producto/getProducto",
    {/*parametro en este caso no se necesita ninguna parametro por que traemos las productos directamente de la BDD*/},
    function(data){
    	//alert(data);
	      var c = JSON.parse(data);
	       $.each(c,function(i,item){
	       	 $('#tblProducto').append(
	       	 	  '<tr>'+
	                  '<th style="width: 10px">SKU</th>'+
	                  '<th style="width: 40%" >Nombre</th>'+
	                  '<th style="width: 40%">Precio</th>'+
	                  '<th style="width: 60px">Imagen</th>'+
	                '</tr>'+
	              '<tr>'+
	       	 	  '<td>'+item.sku+'</td>'+
	              '<td>'+item.Nombre+'</td>'+
	               '<td>'+
	                	'<div class="label label-warning pull-right" style="width: 100%">'+
	                      	'<span class="">'+item.Precio+'</span>'+
	                    '</div>'+
	               '</td>'+
	               '<td>'+
	                 '<img src="'+item.url_imagen+'" '+
	                 'alt="Product Image" style="width: 100%">'+
	               '</td>'+
	             '</tr>'
	       	 	);
	    });
	});