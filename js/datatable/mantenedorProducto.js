var t = $('#tblProductoEncargo').DataTable({

        lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        order: [[1, 'asc']],
        
        language: {
            "url": base_url+"js/clases/idioma-es-dt.json"
        },
        ajax:{
            "url": site_url+"/Producto/getProducto/",
            "type": "POST",
            dataSrc: ''
                },
        columns: [
            {
                className:   'details-control',
                orderable:   false,
                data:        null,
                defaultContent: '<button type="button" name="asdas" class="btn btn-block btn-info btn-flat">Información</button>'

            },
            { data: "Nombre" },
            { data: "Precio" }

        ],
        "columnDefs": [{
          "targets": [6], 
          "data": "intEstado", 
          "render": function(data, type, row) {

          }

        }],
        "order": [[1, 'asc']]
    
        
    });


