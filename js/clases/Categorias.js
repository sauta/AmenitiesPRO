$.post(site_url+"/Producto/getCategorias",
    {/*parametro en este caso no se necesita ninguna parametro por que traemos las regiones directamente de la BDD*/},
    function(data){
    	//alert(data);
	      var c = JSON.parse(data);
	       $.each(c,function(i,item){
	       	 $('#sltCategoria').append('<option value="'+item.idCategoria+'">'+item.Categoria+'</option>');
	    });
	});