<div class="head-section centered-el">
	<span class="title-l">Types</span>
</div>

<div class="pull-right" style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('type/add'); ?>" class="cust-btn dark-btn add">Ajouter</a> 
</div>

<table id="type" class="display compact custom-styled" style="width:100%">
    <thead class="customized-thead">
		<th>Type</th>
		<th>Actions</th>
    </thead>
	<tbody>
		<?php foreach($t_type as $t){ ?>
		<tr>
			<td><?php echo $t['name_type']; ?></td>
			<td>
				<!--<a href="<?php //echo site_url('type/edit/'.$t['id_type']); ?>" class="btn btn-info btn-xs act-edit-btn"></a>--> 
				<a href="<?php echo site_url('type/remove/'.$t['id_type']); ?>" class="btn btn-danger btn-xs act-delete-btn"></a>
			</td>
		</tr>
		<?php } ?>
	<tbody>
</table>

<script type="text/javascript">
	function toggleView(elm) {
		var x = document.getElementById(elm);
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
	$(document).ready(function() {
		$('#type').DataTable( {
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
		});
		
	})
</script>
