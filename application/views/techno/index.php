

<div class="head-section centered-el">
	<span class="title-l">Technologie</span>
	<p>Vous avez <span><?php echo $nb_techno ?></span> technologie(s)</p>
</div>

<div style="margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('techno/add'); ?>" class="cust-btn dark-btn add">Ajouter technologie</a> 
</div>


<table id="technoList" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>ID</th>
		<th>Nom</th>	
		<th>Actions</th>
    </thead>
	<tbody>
	<?php foreach($t_techno as $t){ ?>
    <tr> 
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['name']; ?></td>
		<td>
            <a href="<?php echo site_url('techno/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Editer</a> 
            <a href=""  title="Supprimer techno"  class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $t['id'] ?>">Supprimer</a>
        </td>
    </tr>
    <div class="modal fade" id="myModal<?php echo $t['id']; ?>" role="dialog">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">      
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>                
                      <div class="modal-body">
                        <div class="wrap-field carte">
                          <div class="title-field">Confirmation</div>
                           
                            <p>Êtes-vous sûr de vouloir supprimer ?</p>
                             <div class="modal-footer">
								<a  href="<?php echo site_url('techno/remove/'. $t['id']); ?>" class="submit"  >Oui</a>
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
		$('#technoList').DataTable( {
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
