$(document).ready( function () {
    $('#table-request-maintenance').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    })
    
    $(".datepicker").datepicker();
} );
