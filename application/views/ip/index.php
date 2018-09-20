<div class="head-section centered-el">
	<span class="title-l">Adresse IP</span>
    <p>Vous avez <span><?php echo $nb_ip ?></span> adresse(s) IP</p>
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
<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('ip/add'); ?>" class="cust-btn dark-btn add">Ajouter IP</a> 
</div>
<table id="ipList" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>Liste IP</th>
		<th>Hébergement</th>
		<th>Reverse IP</th>
		<th>Nombre de site</th>
		<th>Action</th>
    </thead> 
	<tbody>
	<?php foreach($t_ip as $t){ ?>
    <tr id="<?php echo $t->id; ?>">
		<td><?php echo $t->adresse; ?></td>
		<td><?php echo $t->hebergement; ?></td>
		<td><?php echo $t->reverseip; ?></td>
		<td><?php echo $t->nb_site; ?></td>
		<td>
            <a href="<?php echo site_url('ip/edit/'.$t->id); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('ip/remove/'.$t->id); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
	</tbody>
</table>
<script>
	$(document).ready(function() {
		$('#ipList').DataTable( {
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
