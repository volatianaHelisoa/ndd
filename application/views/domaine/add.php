<?php echo form_open('domaine/add',array("class"=>"form-horizontal")); ?>


            <div class="topbar-head"></div>
            <div class="main-wrapper">
                <div class="head-section centered-el">
                    <span class="title-l">Nom de domaine</span>
                    <p>Vous avez 1000 nom de domaines</p>
                </div>
				
				<div class="filter">
					
				</div>
                <div class="card wrap-field">
					<div class="title-field">Information général</div>
                   
                    	<div class="field">
                        	<label for="">Nom de domaine :</label>
                        	<input type="text" name="nom" value="<?php echo $this->input->post('nom'); ?>"  id="nom" />
                        </div>
                        <div class="field">
                        	<label for="">Thématique :</label>
                        	<input type="text" id="theme" >
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
						<div class="field addr-ip" >
                        	<label for="">Adresse IP :</label>
                        	<input type="text" id="ip" >
                        </div>
                        <div class="field">
                        	<label for="">Registrar :</label>
                        	<select name="id_registrar" >
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
                        <input type="button" class="btn submit" value="Suivant">
                    
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
							
                        </div>
                        
                        <input type="submit" class="btn submit" value="Ajouter">
						
                </div>
            </div>
  

<?php echo form_close(); ?>

 <script type="text/javascript">
        $(document).ready(function(){
			$(".preference" ).hide();	
			$(".addr-ip").hide();	

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
							console.info(data);
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

		// auto complete
		$( "#id_heberg" ).change({
				source: function(request, response) {	
					$.ajax({
						//q: request.term,
						url: "<?=site_url('domaine/get_autocomplete_theme')?>",
						data: { term: $("#theme").val()},
						dataType: "json",
						type: "GET",
						success: function(data) {
							console.info(data);
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
			

        });
    </script>