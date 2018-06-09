
//buscador productos




$(function () {
	$('#tblProducto').DataTable()
	$.post(site_url+"/Producto/getProducto",
	    {/*parametro en este caso no se necesita ninguna parametro por que traemos las productos directamente de la BDD*/},
	    function(data){
	    	//alert(data);
		      var c = JSON.parse(data);
		       $.each(c,function(i,item){
		       	 $('#tblProducto').append(
		              '<tr>'+
		       	 	      '<td>'+item.sku+'</td>'+
		                  '<td>'+item.Nombre+'</td>'+
		                  '<td>'+item.Precio+'</td>'+
		                  // '<td>'+'<img src="'+item.url_imagen+'"</td>'+
		              '</tr>'
		       	 	);
			 });
		});
	$(function() {
		alert('se está llamando')
	})();
});


		 