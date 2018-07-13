//buscador clientes

var t = $('#tblClientes').DataTable();

$.post(site_url+"/Usuario/getCliente",
	    {/*parametro en este caso no se necesita ninguna parametro por que traemos las productos directamente de la BDD*/},
	    function(data){
	    	//alert(data);
		      var c = JSON.parse(data);
		       $.each(c,function(i,item){
		       	t.row.add([

					     item.NombreUsu,
			             item.RazonSocial,
		                 item.Celular+' <br>'+item.Email,
						 item.Region+', <br>'+item.Provincia+'-'+item.Comuna
		                 // item.Disponibilidad,
		       		]).draw(false);

			 });
		});