//buscador clientes

var t = $('#tblClientes').DataTable({
		language: {
            "url": base_url+"js/clases/idioma-es-dt.json"
        },
        ajax:{
            "url": site_url+"/Usuario/getCliente/",
            "type": "POST",
            dataSrc: ''
         },
         columns: [
            { data: "NombreUsu"},
            { data: "RazonSocial" },
            { data: "Telefono" },
            { data: "Region" }
      		],
      		 "columnDefs": [{
      		  	"targets": [1], 
	          	"data": "nombre", 
	         	 "render": function(data, type, row) {
	            return "<span style='color:#006699;'><i class='fa fa-user'></i> &nbsp;"+data+" "+row.Region+"</span><br>"+
	            		"<span style='color:#555;'><i class='fa fa-calendar'></i> &nbsp;"+row.Cargo+"</span>";              
        		  }
        		}
        	],
        "order": [[1, 'asc']]
	});

// $.post(site_url+"/Usuario/getCliente/",
// 	    {/*parametro en este caso no se necesita ninguna parametro por que traemos las productos directamente de la BDD*/},
// 	    function(data){
// 	    	//alert(data);
// 		      var c = JSON.parse(data);
// 		       $.each(c,function(i,item){
// 		       	t.row.add([

// 					     item.NombreUsu,
// 			             item.RazonSocial,
// 		                 item.Celular+' <br>'+item.Email,
// 						 item.Region+', <br>'+item.Provincia+'-'+item.Comuna
// 		                 // item.Disponibilidad,
// 		       		]).draw(false);

// 			 });
// 		});