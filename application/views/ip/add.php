<?php echo form_open('ip/add',array("class"=>"form-horizontal")); ?>
	<div class="head-section centered-el">
		<span class="title-l">Adresse IP</span>
		<p>Vous avez <span><?php echo $nb_ip ?></span> adresse(s) IP</p>
	</div>

	<div class="wrap-field info-gen carte ">
		<div class="title-field">Ajouter un IP</div>
		<?php if(isset($error_nom)) :?>
				<div class="alert alert-info" role="alert" style="text-align: left">
					<?php echo $error_nom; ?>
				</div>
		<?php endif ?>
		<div class="field">
			<label for="id_heberg" >Sélectionner hébergement</label>
			<select name="id_heberg" class="form-control" required>
				<option value="">selectionner hebergement</option>
				<?php 
				foreach($all_t_hebergement as $t_hebergement)
				{
					$selected = ($t_hebergement['id'] == $this->input->post('id_heberg')) ? ' selected="selected"' : "";
					echo '<option value="'.$t_hebergement['id'].'" '.$selected.'>'.$t_hebergement['url'].'</option>';
				} 
				?>
			</select>
		</div>
		<div class="field">
			<label for="adresse">Adresse IP (*)</label>
			<textarea  name="adresse"	id="adresse"><?php echo $this->input->post('adresse'); ?></textarea>
			
		</div>
		<div class="field">
		<label for="reverseip">Reverse IP</label>		
		<input type="text" name="reverseip" value="<?php echo $this->input->post('reverseip'); ?>"  id="reverseip" />
		</div>
		<button type="submit" class="btn submit primary-action">Enregistrer</button>
		<a href="<?php echo site_url('ip'); ?>" class="submit">Annuler</a>
		</div>
	</div>
<?php echo form_close(); ?>