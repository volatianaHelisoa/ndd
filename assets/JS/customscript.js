$(document).ready(function() {
 
    // Activate an inline edit on click of a table cell
    $('#ndd-list').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this );
    } );
    $('#ndd-list').DataTable( {
        "dom": '<"toolbar">frtip',
        "info":"Showing _START_ to _END_ of _TOTAL_ entries",
        "bFilter": false
    });
    $("div.toolbar").html();
    var nddList = $('#ndd-list').DataTable();
    $('.searchInTable').keyup(function(){
        nddList.search($(this).val()).draw() ;
    })
} );