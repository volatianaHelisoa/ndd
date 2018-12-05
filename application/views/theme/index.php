<div class="head-section centered-el">
	<span class="title-l">Gestion thématique</span>
	<p>Vous avez <span><?php echo $nb_theme ?></span> thème(s)</p>
</div>

<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('theme/add'); ?>" class="cust-btn dark-btn add">Ajouter thématique</a> 
</div>

<table id="thematiqueList" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>Thématique</th>
		<th>Nombre de site</th>
		<th>Actions</th>
    </thead>
	<tbody>
	<?php foreach($t_theme as $t){ ?>
    <tr>
		<td><?php echo $t->name; ?></td>
        <td><a href="<?php echo site_url('domaine?theme='.$t->id) ?>"><?php echo $t->nb_site; ?></a></td>
		<td>
            <a href="<?php echo site_url('theme/edit/'.$t->id); ?>" class="btn btn-info btn-xs act-edit-btn"></a> 
            <a href=""  title="Supprimer theme"  class="btn btn-danger btn-xs act-delete-btn" data-toggle="modal" data-target="#myModal<?php echo $t->id; ?>"></a>
        </td>
    </tr>
    <div class="modal fade" id="myModal<?php echo $t->id; ?>" role="dialog">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">      
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>                
                      <div class="modal-body">
                        <div class="wrap-field carte">
                          <div class="title-field">Confirmation</div>
                           
                            <p>Êtes-vous sûr de vouloir supprimer ?</p>
                             <div class="modal-footer">
								<a  href="<?php echo site_url('theme/remove/'.$t->id); ?>" class="submit"  >Oui</a>
								<button type="button" class="submit" data-dismiss="modal">Non</button>
							</div>
				</div>
				</div>
			</div>
			</div>
		</div>
	<?php } ?>
	</tbody>
</table>
<script>
	$(document).ready(function() {
		$('#thematiqueList').DataTable( {
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
