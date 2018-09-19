$(document).ready(function() {
 
    // Activate an inline edit on click of a table cell
    $('#ndd-list').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this );
    } );
    $('#ndd-list').DataTable( {
        "dom": '<"toolbar">frtip',
        "info":"Showing _START_ to _END_ of _TOTAL_ entries",
        "bFilter": false,
        "language": {
            "sProcessing":     "Traitement en cours...",
            "sSearch":         "Rechercher&nbsp;:",
            "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
            "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
            "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            "sInfoPostFix":    "",
            "sLoadingRecords": "Chargement en cours...",
            "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
            "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
            "oPaginate": {
                "sFirst":      "Premier",
                "sPrevious":   "Pr&eacute;c&eacute;dent",
                "sNext":       "Suivant",
                "sLast":       "Dernier"
            },
            "oAria": {
                "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
            },
            "select": {
                    "rows": {
                        _: "%d lignes séléctionnées",
                        0: "Aucune ligne séléctionnée",
                        1: "1 ligne séléctionnée"
                    } 
            }
        }
    });
    ('#do_filter').click( function() {
        table.draw();
    } );
    $('#reset_filter').click(function () {
        $("#filter-registar" ).val("tous");
        table.draw();
    });


    $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            registrarVal = $('#filter-registar').val();
            is_valid = true;

            if(registrarVal != '' &&  registrarVal != "tous" && is_valid){
                is_valid = false;                
                if (data[0] == registrarVal) is_valid = true;                         
            }
            return is_valid;
        }
    );
    
    $("div.toolbar").html();
    var nddList = $('#ndd-list').DataTable();
    $('.searchInTable').keyup(function(){
        nddList.search($(this).val()).draw() ;
    })
     
    var password = $("#the-user-password-detail").text().replace(/./g, '*');
    console.log(password);
    $("#the-user-password-detail").text(password);
    
} );

