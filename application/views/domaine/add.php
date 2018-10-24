<?php echo form_open('domaine/add',array("class"=>"form-horizontal")); ?>

	<div class="head-section centered-el">
		<span class="title-l">Nom de domaine</span>
		<p>Vous avez <?php $domaine_data = $this->Domaine_model->get_all_t_domaine(); echo(count($domaine_data));?> nom de domaines</p>
		
		
	</div>				
	
	<div class="wrap-field info-gen carte">
			<div class="title-field">Information générale</div>
			<?php if(isset($error_nom)) :?>
				<div class="alert alert-info" role="alert">
					<?php echo $error_nom; ?>
				</div>
			<?php endif ?>
			<div class="field">
				<label for="">Nom de domaine (*) :</label>
				<input type="text" name="nom" value="<?php echo $this->input->post('nom'); ?>"  id="nom" >
			</div>

			<div class="field">
				<label >Type</label>
			
					<select name="id_type" >
						<option value="">Selectionner type</option>
						<?php 
						foreach($all_t_type as $t_type)
						{
							$selected = ($t_type['id_type'] == $this->input->post('id_type')) ? ' selected="selected"' : "";

							echo '<option value="'.$t_type['id_type'].'" '.$selected.'>'.$t_type['name_type'].'</option>';
						} 
						?>
					</select>
			
			</div>

			<div class="field">
				<label for="">Thématique :</label>				
				<div class="content-chips theme_tags">
					<input class="typeahead" name="theme_tags" type="text" data-role="materialtags" placeholder="Saisir thème" >						
				</div>	
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
				<select name="id_registrar"  >
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
			<div class="field row">
				<label for="is_ssl" class="col-md-6"><input type="checkbox"  name="is_ssl" id="is_ssl"/><small>Site SSL</small></label>
				<label for="is_www" class="col-md-6"><input type="checkbox"  name="is_www"  id="is_www"/><small>Repertoire WWW</small></label>
			</div>
			
			<input type="button" class="btn submit btn-next prevnext" value="Suivant">
			<input type="submit" class="btn submit btn-save-first" value="Ajouter">
	</div>
	<div class="wrap-field preference carte">
		<div class="title-field ">Préférences</div>
		
			<div class="field">
				<label for="">CMS / HTML</label>
				<select name="id_cms" id="cms_select">
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
			<div id="bo-acces">
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
				<div class="sub-title">Technologies :</div>
				<div class="content-chips techno_tags ">
					<input class="typeahead" name="techno_tags" type="text" data-role="materialtags" >						
				</div>				

			</div>
			<input type="button" class="btn submit btn-previous prevnext" value="Precedent">
			<input type="submit" class="btn submit btn-save" value="Ajouter">
	</div>
<?php echo form_close(); ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 
 <script type="text/javascript">
        $(document).ready(function(){ 
			$("#cms_select").change(function(){
				var value = $(this).find("option:selected").text();
				if (value.toLowerCase().indexOf("html") >= 0) 
					$("#bo-acces").hide();
				else
					$("#bo-acces").show();
				
			});
			$(".materialize-tags > input.n-tag").prop("autofocus", true);
		$.ajax({
			url: "<?=site_url('domaine/get_techno_list')?>",				
			dataType: "json",
			type: "GET",                  
			success: function(data){   
			//console.log(data);                
			var technos = new Bloodhound({
				datumTokenizer: Bloodhound.tokenizers.obj.whitespace('label'),
				queryTokenizer: Bloodhound.tokenizers.whitespace,                   
				local:data
			});
			technos.initialize();
			var elt = $('.techno_tags input.n-tag');
			// elt.materialtags({
			// 	itemValue: 'id',
			// 	itemText: 'label',
			// 	typeaheadjs: {
			// 		name: 'technos',
			// 		displayKey: 'label',
			// 		source: technos.ttAdapter(),
			// 		addOnBlur: true,
			// 		trimValue: true,
			// 		confirmKeys: [13, 44]
			// 	}
			// });		
			elt.materialtags({								
				confirmKeys: [188, 13,9],
				typeaheadjs: {
					name: 'technos',
					displayKey: 'label',
					valueKey: 'label',
					source: technos.ttAdapter(),	
					trimValue: true
				}
			});				   
					
			}
        });

		$.ajax({
			url: "<?=site_url('domaine/get_theme_list')?>",				
			dataType: "json",
			type: "GET",                  
			success: function(data){   
			//console.log(data);                
			var themes = new Bloodhound({
				datumTokenizer: Bloodhound.tokenizers.obj.whitespace('label'),
				queryTokenizer: Bloodhound.tokenizers.whitespace,                   
				local:data
			});
			themes.initialize();
			var elt = $('.theme_tags input.n-tag');

		
			elt.materialtags({								
				confirmKeys: [188, 13,9],
				typeaheadjs: {
					name: 'themes',
					displayKey: 'label',
					valueKey: 'label',
					source: themes.ttAdapter(),
					trimValue: true
				}
			});					   
					
			}
        });

		$(".preference" ).hide();	
		$(".div-addr-ip").hide();	
		$(".btn-next").hide();	
		


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


		$('.btn').click(function(e){ 				
			var tags = [];			
            $('.content-chips.techno_tags .materialize-tags .materialize-tags').find('span.chip').each(function() {               
				var value = $(this).text();					
				var res = value.replace("close", "");			
				tags.push(res); 				           
			});
			
			var theme_tags = [];		
			$('.theme_tags .materialize-tags .materialize-tags').find('span.chip').each(function() {               
				var theme_value = $(this).text();					
				var theme_res = theme_value.replace("close", "");			
				theme_tags.push(theme_res); 				           
			});

			
			setCookie('tags',tags,1);	
			setCookie('theme_tags',theme_tags,1);				
		});

	function setCookie(name,value,days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }

	});
</script>

<script src="<?php echo base_url(); ?>assets/plugins/typeahead/typeahead.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/materialize-tags/js/materialize-tags.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/JS/materialize.min.js"></script>

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">