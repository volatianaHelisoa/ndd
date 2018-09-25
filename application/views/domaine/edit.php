<?php echo form_open('domaine/edit/'.$t_domaine->id,array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte">
<div class="wrap-field info-gen carte">
<div class="title-field">Modifier Information générale</div>
	<div class="field">
		<label for="nom">Nom</label>
		<input type="text" name="nom" value="<?php echo ($this->input->post('nom') ? $this->input->post('nom') : $t_domaine->nom); ?>" id="nom" />
	</div>
	
	<div class="field">
			<label for="">Thématique :</label>
			<?php if( $t_domaine->theme != null ) {?>
		
					<input type="text" id="theme" name="theme"  value="<?php echo $t_domaine->theme["name"]; ?>" >
			<?php } else ?>
			<input type="text" id="theme" name="theme"  value="" >
			
	</div>
	<div class="field">
		<label for="id_registrar">Registrar</label>
		
		<select name="id_registrar" class="form-control">
			<option value="">Sélectionner</option>
			<?php 
			foreach($all_t_registrar as $t_registrar)
			{
				$selected = ($t_registrar['id'] == $t_domaine->id_registrar) ? ' selected="selected"' : "";

				echo '<option value="'.$t_registrar['id'] .'" '.$selected.'>'.$t_registrar["name"].'</option>';
			} 
			?>
		</select>
	</div>


<div class="field">
	<label for="">Hébegement :</label>
	<select name="id_heberg"  id="id_heberg">
	<option value="">Selectionner hebergement</option>
	<?php 
	foreach($all_t_hebergement as $t_hebergement)
	{
		$selected = ($t_hebergement['id'] == $t_domaine->id_heberg) ? ' selected="selected"' : "";

		echo '<option value="'.$t_hebergement['id'].'" '.$selected.'>'.$t_hebergement['name'].'</option>';
	} 
	?>
</select>
</div> 
<?php if($all_t_ip != null ) : 	?>
<div class="field div-addr-ip" >
		<label for="">Adresse IP :</label>
		<select id="addr-ip"   name="addr-ip" ?>" >
			<option value="">Selectionner IP</option>
			
			<?php 
			foreach($all_t_ip as $t_ip)
			{
				$selected = ($t_ip['id_heberg'] == $t_domaine->id_heberg) ? ' selected="selected"' : "";
		
				echo '<option value="'.$t_ip['id'].'" '.$selected.'>'.$t_ip['adresse'].'</option>';
			} 
			?>
		</select>
</div>
<?php endif; 	?>


<div class="wrap-field preference carte">
					<div class="title-field ">Préférences</div>
		<label for="id_cms">Cms</label>
		
		<select name="id_cms" class="form-control">
			<option value="">Sélectionner cms</option>
			<?php 
			foreach($all_t_cms as $t_cms)
			{
				$selected = ($t_cms['id'] == $t_domaine->id_cms) ? ' selected="selected"' : "";

				echo '<option value="'.$t_cms['id'].'" '.$selected.'>'.$t_cms['type'].'</option>';
			} 
			?>
		</select>
	</div>
	<div class="ttl-infos clearfix">
		<span>Serveur et administration</span>
	</div>
	<div class="field">
		<label for="ftp_server">Ftp Server</label>
		<input type="text" name="ftp_server" value="<?php echo ($this->input->post('ftp_server') ? $this->input->post('ftp_server') : $t_domaine->ftp_server); ?>"  id="ftp_server" />
	</div>
	<div class="field">
		<label for="ftp_login">Ftp Login</label>
		<input type="text" name="ftp_login" value="<?php echo ($this->input->post('ftp_login') ? $this->input->post('ftp_login') : $t_domaine->ftp_login); ?>" id="ftp_login" />
	</div>
	<div class="field">
		<label for="ftp_password">Ftp Password</label>
		<input type="text" name="ftp_password" value="<?php echo ($this->input->post('ftp_password') ? $this->input->post('ftp_password') : $t_domaine->ftp_password); ?>"  id="ftp_password" />
	</div>
	<div class="field">
		<label for="admin_url">Admin Url</label>
		<input type="text" name="admin_url" value="<?php echo ($this->input->post('admin_url') ? $this->input->post('admin_url') : $t_domaine->admin_url); ?>" id="admin_url" />
	</div>
	<div class="field">
		<label for="admin_login">Admin Login</label>
		<input type="text" name="admin_login" value="<?php echo ($this->input->post('admin_login') ? $this->input->post('admin_login') : $t_domaine->admin_login); ?>"  id="admin_login" />
	</div>
	<div class="field">
		<label for="admin_password">Admin Password</label>
		<input type="text" name="admin_password" value="<?php echo ($this->input->post('admin_password') ? $this->input->post('admin_password') : $t_domaine->admin_password); ?>"  id="admin_password" />
	</div>

<div class="sub-title">Plugin</div>
			<div class="content-chips">
			<select name="select_ml_techno[]"  data-live-search="true" multiple class="select_techno" >
		
			<?php  
				foreach($all_t_techno as $t_techno)
				{
					$selected = $t_techno['id'] != $t_domaine->techno['id'] ? ' selected="selected"' : "";

					echo '<option value="'.$t_techno['id'].'" '.$selected.'>'.$t_techno['name'].'</option>';
				} 
			?>
			</select>
			</div>
	
	<button type="submit" class="btn submit">Enregistrer</button>
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
		
				
		});			
			
		$(".content-chips span").click(function(){
				var hideChip = $(this).parent(".content-chips li");
				hideChip.hide();
		});

	

        });
    </script>