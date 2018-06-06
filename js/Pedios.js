$.post(site_url+"Pedidos/getPedidos",
    {/*parametro en este caso no se necesita ninguna parametro por que traemos las regiones directamente de la BDD*/},
    function(data){
    	//alert(data);
	      var c = JSON.parse(data);
	       $.each(c,function(i,item){
	       	 $('#cboRegion').append('<option value="'+item.idRegion+'">'+item.Region+'</option>');
	    });
	});