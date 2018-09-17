$(document).ready(function() {
    $('#ndd-list').DataTable( {
        "dom": '<"toolbar">frtip',
        "info":"Showing _START_ to _END_ of _TOTAL_ entries"
    });
    $("div.toolbar").html();
    var nddList = $('#ndd-list').DataTable();
    $('.searchInTable').keyup(function(){
        nddList.search($(this).val()).draw() ;
    })
} );