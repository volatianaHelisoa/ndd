<div class="head-section centered-el">
	<span class="title-l">Utilisateurs</span>
	<p>Vous avez <span><?php echo $nb_user ?></span> utilisateur(s)</p>
</div>

<div class="filter">
<div id="inner-top-panel" class="showpanel clear">
		<div class="left ">
			<div class="usr-srch--input-wrapper">
				<input autocomplete="off" class="searchInTable usr-srch--input" type="search" placeholder="Rechercher" id="recherche"/>
			</div>
			<i class="fa fa-3x fa-search"></i>
		</div>
	</div>
</div>


<div style="margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('user/add'); ?>" class="cust-btn dark-btn add">Ajouter utlisateur</a> 
</div>

<table id="userList" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>Nom</th>
		<th>Email</th>
		<th>Role</th>		
		<th>Actions</th>
    </thead>
	<tbody>
	<?php foreach($t_user as $t){  ?>
    <tr>
		<td><?php echo $t->name; ?></td>
		<td><?php echo $t->email; ?></td>	
		<td><?php echo $t->role ?></td>	
		<td>
            <a href="<?php echo site_url('user/edit/'.$t->id); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$t->id); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
	</tbody>
	
</table>

<script>
	$(document).ready(function() {
		$('#userList').DataTable( {
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