
<div class="head-section centered-el">
	<span class="title-l">Hébergement</span>
	<p>Vous avez <span><?php echo $nb_hebergement ?></span></span> hébergement(s)</p>
</div>

<div style=" margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('hebergement/add'); ?>" class="cust-btn dark-btn add">Ajouter hébergement</a> 
</div>

<table id="hebergement" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>Hébergement</th>
		<th>Accès</th>
		<th>Nombre d'IP</th>
		<th>Nombre de site</th> 
		<th>Actions</th>
    </thead>
	<tbody>
	<?php foreach($t_hebergement as $t){?>
    <tr>	
		<td id="<?php echo $t->id; ?>"><?php echo $t->name;  ?></td>
		<td><button class="cust-btn dark-btn small-btn acces-heberg"  data-heberg ="<?php echo $t->id; ?>">VOIR</button></td>
		<td><?php echo $t->nb_ip; ?></td>
		<td><?php echo $t->nb_site; ?></td>
		<td>
            <a href="<?php echo site_url('hebergement/edit/'.$t->id); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('hebergement/remove/'.$t->id); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
	</tbody>
</table>

<div class="modal fade" id="hebergModal">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true"></span>
		</button>
		<div class="modal-body">
		<div class="wrap-field carte">
			<div class="title-field">Hébergement : <span id="heberg_res"> </span></div>
			<form action="">						
				<div class="field2 other-field">
					<label for="">Url : </label>					
					<span id="url_res"></span>
				</div>
				<div class="field2 other-field">
					<label for="">Login : </label>					
					<span id="login_res"></span>
				</div>
				<div class="field2 other-field">
					<label for="">Password : </label>
					<span id="pass_res"></span>
				</div>
			</form>
		</div>
		</div>
	</div>
	</div>
</div>


<script>
	$(document).ready(function() {
		$('#hebergement').DataTable( {
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
	

		 $('.acces-heberg').click(function(e){           
			var nddId = $(this).attr('data-heberg'); 

			$.ajax({
				url: "<?=site_url('hebergement/get_info_by_id')?>",
				data: { id: nddId},
				dataType: "json",
				type: "GET",                  
				success: function(data){   
					//console.log(data);
						$("#heberg_res").text(data["name"]);
						$("#url_res").text(data["url"]);	
						$("#login_res").text(data["login"]);	
						$("#pass_res").text(data["password"]);	

					$('#hebergModal').modal('show');
				}
			});
        });
        
		
	})
</script>
