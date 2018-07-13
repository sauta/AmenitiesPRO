

$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        ajax: "../php/staff.php",
        table: "#example",
        fields: [ {
                label: "First name:",
                name: "first_name"
            }, {
                label: "Last name:",
                name: "last_name"
            }, {
                label: "Position:",
                name: "position"
            }, {
                label: "Office:",
                name: "office"
            }, {
                label: "Extension:",
                name: "extn"
            }, {
                label: "Start date:",
                name: "start_date"
            }, {
                label: "Salary:",
                name: "salary"
            }
        ]
    } );
 
    var table = $('#example').DataTable( {
        dom: "Bfrtip",
        ajax: "../php/staff.php",
        columns: [
            { data: null, render: function ( data, type, row ) {
                // Combine the first and last names into a single table field
                return data.first_name+' '+data.last_name;
            } },
            { data: "position" },
            { data: "office" },
            { data: "extn" },
            { data: "start_date" },
            { data: "salary", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
        ],
        select: true,
        buttons: [
            {
                extend: "create",
                editor: editor,
                formButtons: [
                    'Create',
                    { text: 'Cancel', action: function () { this.close(); } }
                ]
            },
            {
                extend: "edit",
                editor: editor,
                formButtons: [
                    'Edit',
                    { text: 'Cancel', action: function () { this.close(); } }
                ]
            },
            {
                extend: "remove",
                editor: editor,
                formButtons: [
                    'Delete',
                    { text: 'Cancel', action: function () { this.close(); } }
                ]
            }
        ]
    } );
} );