

<div class="head-section centered-el">
	<span class="title-l">CMS</span>
	<p>Vous avez <span><?php echo $nb_cms ?></span> CMS.</p>
</div>

<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('cms/add'); ?>" class="cust-btn dark-btn add">Ajouter CMS</a> 
</div>

<table id="cmsList" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>ID</th>
		<th>Type</th>
		<th>Actions</th>
    </thead>
	<tbody>
		<?php foreach($t_cms as $t){ ?>
		<tr>
			<td><?php echo $t['id']; ?></td>
			<td><?php echo $t['type']; ?></td>
			<td>
				<a href="<?php echo site_url('cms/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
				<a href="<?php echo site_url('cms/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<script>
	$(document).ready(function() {
		$('#cmsList').DataTable( {
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
