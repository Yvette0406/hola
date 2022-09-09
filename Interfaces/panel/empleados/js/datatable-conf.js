
$(document).ready(function() {
    $('#table').DataTable( {
        dom: 'Bfrtp',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );