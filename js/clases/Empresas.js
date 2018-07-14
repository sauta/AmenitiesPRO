$.post(site_url+"/Empresa/getEmpresa",
    {/*parametro en este caso no se necesita ninguna parametro por que traemos las Categoria directamente de la BDD*/},
    function(data){
    	//alert(data);
	      var c = JSON.parse(data);
	       $.each(c,function(i,item){
	       	 $('#cboEmpresa1').append('<option value="'+item.idEmpresa+'">'+item.RazonSocial+'</option>');
	    });
	});

$.post(site_url+"/Empresa/getEmpresa",
    {/*parametro en este caso no se necesita ninguna parametro por que traemos las Categoria directamente de la BDD*/},
    function(data){
    	//alert(data);
	      var c = JSON.parse(data);
	       $.each(c,function(i,item){
	       	 $('#cboEmpresa2').append('<option value="'+item.idEmpresa+'">'+item.RazonSocial+'</option>');
	    });
	});

$.post(site_url+"/Empresa/getEmpresa",
    {/*parametro en este caso no se necesita ninguna parametro por que traemos las Categoria directamente de la BDD*/},
    function(data){
    	//alert(data);
	      var c = JSON.parse(data);
	       $.each(c,function(i,item){
	       	 $('#cboEmpresa3').append('<option value="'+item.idEmpresa+'">'+item.RazonSocial+'</option>');
	    });
	});

$.post(site_url+"/Empresa/getEmpresa",
    {/*parametro en este caso no se necesita ninguna parametro por que traemos las Categoria directamente de la BDD*/},
    function(data){
    	//alert(data);
	      var c = JSON.parse(data);
	       $.each(c,function(i,item){
	       	 $('#cboEmpresa4').append('<option value="'+item.idEmpresa+'">'+item.RazonSocial+'</option>');
	    });
	});