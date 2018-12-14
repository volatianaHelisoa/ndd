
<?php echo form_open('domaine/edit/'.$t_domaine['id']); ?>

<div class="head-section centered-el">
	<span class="title-l">Modifier ce domaine</span>
</div>				

<div class="wrap-field info-gen carte">
		<div class="title-field"><?php echo $nom; ?></div>
		<?php if(isset($error_nom)) :?>
			<div class="alert alert-info" role="alert">
				<?php echo $error_nom; ?>
			</div>
		<?php endif ?>			

		<div class="field">
			<label >Type</label>
		
				<select name="id_type" >
					<option value="">Selectionner type</option>
					<?php 
				foreach($all_t_type as $t_type)
				{
					$selected = ($t_type['id_type'] == $t_domaine['id_type']) ? ' selected="selected"' : "";
	
					echo '<option value="'.$t_type['id_type'].'" '.$selected.'>'.$t_type['name_type'].'</option>';
				} 
					?>
				</select>
		
		</div>

		<div class="field">
			<label for="">Thématique :</label>
			
			<div class="content-chips theme_tags">
				<input class="typeahead" name="theme_tags" type="text" id="techno_result" data-role="materialtags" placeholder="Saisir thème" <?php  if( isset($all_theme) ) { foreach($all_theme as $theme){ $themeName[] = $theme["name"]; } ?> value="<?php echo implode(',', $themeName);?>" <?php } ?> >
			</div>	
		</div>		
				
		<div class="field">
			<label for="">Registrar (*) :</label>
			<select name="id_registrar"  >
				<option value="">Selectionner registrar</option>
				<?php 
				foreach($all_t_registrar as $t_registrar)
				{
					$selected = ($t_registrar['id'] == $t_domaine['id_registrar']) ? ' selected="selected"' : "";
	
					echo '<option value="'.$t_registrar['id'].'" '.$selected.'>'.$t_registrar['name'].'</option>';
				} 
				?>
			</select>
		</div>

		<div class="field row">
			<label for="is_ssl" class="col-md-6"><input type="checkbox"  name="is_ssl" id="is_ssl" value="<?php echo ($this->input->post('is_ssl') ? $this->input->post('is_ssl') : $t_domaine['is_ssl']); ?>" /><small>Site SSL</small></label>						
			<label for="is_www" class="col-md-6"><input type="checkbox"  name="is_www" id="is_www" value="<?php echo ($this->input->post('is_www') ? $this->input->post('is_www') : $t_domaine['is_www']); ?>" /><small>Repertoire WWW</small> </label>				
		</div>
	
		<input type="submit" class="btn submit primary-action" value="Enregistrer" id="saveEdit">
		<a href="<?php echo site_url('domaine'); ?>" class="submit">Annuler</a>
</div>
<?php echo form_close(); ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script type="text/javascript">
	$(document).ready(function(){ 	
		var is_ssl = $('#is_ssl').val();
		if(is_ssl != 0) $('#is_ssl').prop("checked",true);
		
		var is_www = $('#is_www').val();
		if(is_www != 0) $('#is_www').prop("checked",true);
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
		
		function getAllthemes(data){
			
		}

		$('#saveEdit').click(function(e){
			var theme_tags = [],
			test_output = $('.content-chips.theme_tags').find('span.chip').each(function(){
				var text = $(this).text(),
				themeTxt = text.replace("close", "");
				theme_tags.push(themeTxt);
			});
			var themes_val = theme_tags.join(",");
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

