$(document).ready(function () {

    "use strict";

    $('#datatable1').DataTable();

    $('#datatable2').DataTable({
        "scrollY": "300px",
        "scrollCollapse": true,
        "paging": false
    });

    $('#datatable3').DataTable({
        "scrollX": true
    });

    $('#datatable4 tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#datatable4').DataTable({
        dom: "Blfrtip",
        buttons: [{
                text: 'CSV <span class="material-icons">cloud_download</span>',
                extend: 'csvHtml5',
                exportOptions: {
                    columns: ':visible:not(.not-export-col)'
                },
                "className": 'btn btn-dark'
            },
            {
                text: 'Excel <span class="material-icons">cloud_download</span>',
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible:not(.not-export-col)'
                },
                "className": 'btn btn-success'
            },
            {
                text: 'PDF <span class="material-icons">cloud_download</span>', 
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: ':visible:not(.not-export-col)'
                },
                "className": 'btn btn-warning'
            },
            {
                text: 'Print <span class="material-icons">cloud_download</span>',
                extend: 'print',
                exportOptions: {
                    columns: ':visible:not(.not-export-col)'
                },
                "className": 'btn btn-info'
            },

        ],
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
});