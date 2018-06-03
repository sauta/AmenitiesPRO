// $.post(site_url+"cfacturas/getFaturas",
//     {/*parametro en este caso no se necesita ninguna parametro por que traemos las regiones directamente de la BDD*/},
//     function(data){
//     	//alert(data);
// 	      var fac = JSON.parse(data);
// 	       $.each(fac,function(i,item){
// 	       	 $('#tblFactura').append(
// 	       	 	'<option value="'+item.idRegion+'">'+item.Region+'</option>'

// 	       	 	);

// 	    });
// 	});

  $(document).ready(function () {
        $(".chart").shieldChart({
            theme: "light",
            primaryHeader: {
                text: "Estadisticas de factura"
            },
            exportOptions: {
                image: false,
                print: false
            },
            axisX: {
                categoricalValues: ["2000", "2001", "2002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014"]
            },
            tooltipSettings: {
                chartBound: true,
                axisMarkers: {
                    enabled: true,
                    mode: 'xy'
                }                    
            },
            dataSeries: [{
                seriesType: 'line',
                collectionAlias: "Valor promedio por año",
                data: [100, 320, 453, 234, 553, 665, 345, 123, 432, 545, 654, 345, 332, 456, 234]
            }]
        });
   	 });