$.post(site_url+"Direccion/getRegion",
    {/*parametro en este caso no se necesita ninguna parametro por que traemos las regiones directamente de la BDD*/},
    function(data){
    	//alert(data);
	      var c = JSON.parse(data);
	       $.each(c,function(i,item){
	       	 $('#cboRegion').append('<option value="'+item.idRegion+'">'+item.Region+'</option>');
	    });
	});

$( "#cboRegion" ).change(function (){
  	/*Se limpia las provincias y la comunas si se selecciona otra region*/
  	 $('#cboProvincia').html('<option>Selecciones la provincia</option>');
  	 $('#cboComuna').html('<option>Selecciones la comuna</option>');

	$('#cboRegion option:selected').each(function(){
		var id = $('#cboRegion').val();
		$.post(site_url+"Direccion/getProvincia",
		    {
		    	/*Aqui se envia la id de la region para buscar las provincias*/
		        "PK_idRegion": id 
		    },
		    function(data){
			      var c = JSON.parse(data);
			       $.each(c,function(i,item){
			       	/*Se crea una lista de las provincias de la region seleccionada*/
			       	 $('#cboProvincia').append('<option value="'+item.idProvincia+'">'+item.Provincia+'</option>');
			    });
			});
		});
	});

$('#cboProvincia').change(function(){
 /*Se limpia las comunas si se selecciona otra region*/
	$('#cboComuna').html('<option>Selecciones la comuna</option>');
		$('#cboProvincia option:selected').each(function(){
			var id = $('#cboProvincia').val();
				$.post(site_url+"Direccion/getComuna",
			    {
			        /*Aqui se envia la id de la provincia para buscar las comunas*/
					"PK_idProvincia": id
			    },
			    function(data){
			      var c = JSON.parse(data);
			       $.each(c,function(i,item){
			       	/*Se crea una lista de las comunas de la provincia seleccionada*/
			       	 $('#cboComuna').append('<option value="'+item.idComuna+'">'+item.Comuna+'</option>');
			    });
			});
		});
	});


