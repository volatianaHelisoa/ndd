<div class="head-section centered-el">
	<span class="title-l">Régistrar</span>
	<p>Vous avez <span><?php echo $nb_registrar ?></span> Régistrar(s)</p>
</div>

<div style="margin: 20px 0; text-align: right;">
	<a href="<?php echo site_url('registrar/add'); ?>" class="cust-btn dark-btn add">Ajouter registrar</a> 
</div>

<table id="registrarList" class="display compact custom-styled" style="width:100%">
	<thead class="customized-thead">
		<th>Name</th>
		<th>Accès</th>	
		<th>Nombre de site</th> 
		<th>Actions</th>
    </thead>
	<tbody>
	<?php foreach($t_registrar as $t){ ?>
    <tr> 
		<td><?php echo $t->name; ?></td>
		<td><button class="cust-btn dark-btn small-btn acces-registrar"  data-registrar="<?php echo $t->id; ?>">VOIR</button></td>
		<td><?php echo $t->nb_site; ?></td>
		<td>
            <a href="<?php echo site_url('registrar/edit/'.$t->id); ?>" class="btn btn-info btn-xs act-edit-btn"></a> 
			<a href=""  title="Supprimer registrar"  class="btn btn-danger btn-xs act-delete-btn" data-toggle="modal" data-target="#myModal<?php echo $t->id ?>"></a>

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
								<a  href="<?php echo site_url('registrar/remove/'. $t->id); ?>" class="submit"  >Oui</a>
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

<div class="modal fade" id="registrarModal">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true"></span>
		</button>
		<div class="modal-body">
		<div class="wrap-field carte">
			<div class="title-field">Registrar  : <span id="registrar_res"> </span></div>
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
					<input type="password" id="pass_res" disabled class="info-disabled">
					<input type="checkbox" onclick='toggleView("pass_res")' class="eye_toggle" id="view_bopass">
				</div>
			</form>
		</div>
		</div>
	</div>
	</div>
</div>


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
		$('#registrarList').DataTable( {
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

		 $('.acces-registrar').click(function(e){           
			var nddId = $(this).attr('data-registrar'); 

			$.ajax({
				url: "<?=site_url('registrar/get_info_by_id')?>",
				data: { id: nddId},
				dataType: "json",
				type: "GET",                  
				success: function(data){   
					//console.log(data);
						$("#registrar_res").text(data["name"]);
						$("#url_res").text(data["url"]);	
						$("#login_res").text(data["login"]);	
						$("#pass_res").val(data["password"]);	

					$('#registrarModal').modal('show');
				}
			});
        });
	})
</script>
