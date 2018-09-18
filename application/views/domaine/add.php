<?php echo form_open('domaine/add',array("class"=>"form-horizontal")); ?>

                <div class="head-section centered-el">
                    <span class="title-l">Nom de domaine</span>
                    <p>Vous avez 1000 nom de domaines</p>
                </div>
				
				
                <div class="card wrap-field info-gen">
					<div class="title-field">Information général</div>
                   
                    	<div class="field">
                        	<label for="">Nom de domaine (*) :</label>
                        	<input type="text" name="nom" required value="<?php echo $this->input->post('nom'); ?>"  id="nom" />
                        </div>
                        <div class="field">
                        	<label for="">Thématique :</label>
                        	<input type="text" id="theme" name="theme" >
                        </div>
                        
                        <div class="field">
                        	<label for="">Hébegement :</label>
                        	<select name="id_heberg"  id="id_heberg">
							<option value="">Selectionner hebergement</option>
							<?php 
							foreach($all_t_hebergement as $t_hebergement)
							{
								$selected = ($t_hebergement['id'] == $this->input->post('id_heberg')) ? ' selected="selected"' : "";

								echo '<option value="'.$t_hebergement['id'].'" '.$selected.'>'.$t_hebergement['url'].'</option>';
							} 
							?>
						</select>
                        </div>
						<div class="field div-addr-ip" >
                        	<label for="">Adresse IP :</label>
                        	<select id="addr-ip"   name="addr-ip" ?>" >
							</select>
                        </div>
                        <div class="field">
                        	<label for="">Registrar (*) :</label>
                        	<select name="id_registrar" required  >
								<option value="">Selectionner registrar</option>
								<?php 
								foreach($all_t_registrar as $t_registrar)
								{
									$selected = ($t_registrar['id'] == $this->input->post('id_registrar')) ? ' selected="selected"' : "";

									echo '<option value="'.$t_registrar['id'].'" '.$selected.'>'.$t_registrar['name'].'</option>';
								} 
								?>
							</select>
                        </div>
                        <input type="button" class="btn submit btn-next" value="Suivant">
						<input type="submit" class="btn submit btn-save-first" value="Ajouter">
                </div>
                <div class="card wrap-field preference">
					<div class="title-field ">Préférences</div>
                   
                    	<div class="field">
                        	<label for="">CMS / HTML</label>
                        	<select name="id_cms" >
								<option value="">Selectionner cms</option>
								<?php 
								foreach($all_t_cms as $t_cms)
								{
									$selected = ($t_cms['id'] == $this->input->post('id_cms')) ? ' selected="selected"' : "";

									echo '<option value="'.$t_cms['id'].'" '.$selected.'>'.$t_cms['type'].'</option>';
								} 
								?>
							</select>
                        </div>
                        <div class="sub-title">Accès FTP</div>
                        <div class="field">
                        	<label for="">Serveur</label>
                        	<input type="text" name="ftp_server" value="<?php echo $this->input->post('ftp_server'); ?>"  id="ftp_server" />
                        </div>
                        <div class="field">
                        	<label for="">Login :</label>
							<input type="text" name="ftp_login" value="<?php echo $this->input->post('ftp_login'); ?>"  id="ftp_login" />
                        </div>
                        <div class="field">
                        	<label for="">Mot de passe :</label>
                        	<input type="text" name="ftp_password" value="<?php echo $this->input->post('ftp_password'); ?>" id="ftp_password" />
                        </div>
                        <div class="sub-title">Administration</div>
                        <div class="field">
                        	<label for="">URL :</label>
							<input type="text" name="admin_url" value="<?php echo $this->input->post('admin_url'); ?>" id="admin_url" />
                        </div>
                        <div class="field">
                        	<label for="">Login :</label>
							<input type="text" name="admin_login" value="<?php echo $this->input->post('admin_login'); ?>" id="admin_login" />
                        </div>
                        <div class="field">
                        	<label for="">Mot de passe :</label>
							<input type="text" name="admin_password" value="<?php echo $this->input->post('admin_password'); ?>"  id="admin_password" />
                        </div>
                        <div class="sub-title">Plugin</div>
                        <div class="content-chips">
						<select name="select_ml_techno[]"  data-live-search="true" multiple class="select_techno" >
							
							<?php 
							foreach($all_t_techno as $t_techno)
							{
								$selected = $t_techno['id'] != null  ? ' selected="selected"' : "";

								echo '<option value="'.$t_techno['id'].'" '.$selected.'>'.$t_techno['name'].'</option>';
							} 
							?>
						</select>
						</div>
						
						<input type="button" class="btn submit btn-previous" value="Precedent">
						<input type="submit" class="btn submit btn-save" value="Ajouter">
                </div>
		
			
						
			<div class="modal fade" id="nddModalCenter">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="confirmation-wrap">
                            <div class="title-ended">Terminé</div>
                            <p>Nom de domaine ajouter avec succès</p>
							<a href="#" class="submit">OK</a>
							<a href="#" class="submit">Créer</a>
                       </div>
                      </div>
                    </div>
                  </div>
            </div>
  

<?php echo form_close(); ?>

 <script type="text/javascript">
        $(document).ready(function(){ 	
		$('.select_techno').multiselect({
                includeSelectAllOption: true,
                nSelectedText: 'selection',
                nonSelectedText: 'Aucune selection',
                selectAllText: 'Tous',
                allSelectedText: 'Selections'
        });

		$(".preference" ).hide();	
		$(".div-addr-ip").hide();	
		$(".btn-next").hide();	
		// auto complete
		$( "#theme" ).autocomplete({
				source: function(request, response) {
					//console.info(request, 'request');
					//console.info(response, 'response');

					$.ajax({
						//q: request.term,
						url: "<?=site_url('domaine/get_autocomplete_theme')?>",
						data: { term: $("#theme").val()},
						dataType: "json",
						type: "GET",
						success: function(data) {
							// console.log(data);
							//response(data);
							response($.map(data, function (val, item) {
								
								return {
									value: val.label,
									text: val.value
								}
							}))
						}
					});
				},
				select: function (event, ui) {
					//event.preventDefault();
                    $("#theme").val(ui.item.text);
				
                    console.log($("#theme").val(ui.item.text));
                },
				minLength: 2
		});


		$("#id_heberg").change(function(){
			var dID = $(this).val();
			
			if(dID != ""){
				$.ajax({
				type: "GET",
				url: "<?=site_url('domaine/get_select_ip')?>",
				data: { id_heberg: dID},
				dataType: "json",
				success: function(data){
					var select = $("#addr-ip");				
					select.empty();
					select.append($('<option/>', {
						value: 0,
						text: "Selectionner IP"
					}));
					$.each(data, function (index, itemData) {
					
						select
							.append($('<option>', { value : itemData.id })
							.text(itemData.value));
						});			
					
					$(".div-addr-ip").show();		
					$(".btn-next").show();
					$(".btn-save-first").hide();
				}			
        	});	
			}
			else{
				$(".div-addr-ip").hide();	
				$(".preference").hide();	
				$(".btn-save-first").show();		
				$( ".btn-next").hide();
				var $popInput = $('.preference input[type="text"]');	
				$popInput.val("");
				$(".preference select option").val("");
			}
				
		});			
			
		$(".content-chips span").click(function(){
				var hideChip = $(this).parent(".content-chips li");
				hideChip.hide();
		});

		$( ".btn-next" ).click(function() {
			$(".info-gen").hide();			
			$(".preference").show();	
		});

		$( ".btn-previous" ).click(function() {
			$(".info-gen").show();	
			$(".preference").hide();	
		});

        });
    </script>