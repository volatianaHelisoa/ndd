var table = $('#ndd-list').DataTable({
       
    columnDefs: [
        { orderable: false, targets: -1 }
     ],
    
     "pageLength": 50,
     responsive : true,
    
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
    }
);

$('#do_filter').click( function() {

    table.draw();
} );

$('#reset_filter').click(function () {
  
    $("#filter-registar" ).val("tous");
    $("#filter-heberg" ).val("tous");
    $("#filter-theme" ).val("tous");
    $("#filter-type" ).val("tous");
    table.draw();
});


$.fn.dataTable.ext.search.push(
    function (settings, data, dataIndex) {
       var registrarVal = $('#filter-registar').val();
       var hebergVal = $('#filter-heberg').val();
       var themeVal = $('#filter-theme').val();
       var typeVal = $('#filter-type').val();
      
        is_valid = true; 

        if(typeVal != '' &&  typeVal != "tous"  && is_valid){
           
            is_valid = false;                
                if ( data[1].indexOf(typeVal) !== -1)
                    is_valid = true;                                
        }   
   
        if(registrarVal != '' &&  registrarVal != "tous"  && is_valid){
           
            is_valid = false;                
                if ( data[2].indexOf(registrarVal) !== -1)
                    is_valid = true;                                
        }   

        if(hebergVal != '' &&  hebergVal != "tous" && is_valid){
            is_valid = false;                
                if (data[3] == hebergVal)
                    is_valid = true;      
        }

        if(themeVal != '' &&  themeVal != "tous" && is_valid){
            is_valid = false;                
                if (data[5] == themeVal)
                    is_valid = true;      
        }


        return is_valid;
    }
);
 