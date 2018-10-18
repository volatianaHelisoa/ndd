<?php echo form_open('ip/edit/'.$t_ip['id'],array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte">
	<div class="title-field">Modifier IP</div>
	<?php if(isset($error_nom)) :?>
				<div class="alert alert-info" role="alert">
					<?php echo $error_nom; ?>
				</div>
		<?php endif ?>
	<div class="field">
		<label for="id_heberg">Hébergement</label>		
		<select name="id_heberg" class="form-control" required>
			<option value="">Sélectionner</option>
			<?php 
			foreach($all_t_hebergement as $t_hebergement)
			{
				$selected = ($t_hebergement['id'] == $t_ip['id_heberg']) ? ' selected="selected"' : "";

				echo '<option value="'.$t_hebergement['id'].'" '.$selected.'>'.$t_hebergement['name'].'</option>';
			} 
			?>
		</select>
	</div>
	<div class="field">
		<label for="adresse">Adresse</label>
		<input
				type="text"
				name="adresse"
				value="<?php echo ($this->input->post('adresse') ? $this->input->post('adresse') : $t_ip['adresse']); ?>"
				id="adresse"
				required
				placeholder="192.168.0.255"
				pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$"
			/>
	</div>
	<div class="field">
		<label for="reverseip">Reverse IP</label>
		<input type="text" name="reverseip" value="<?php echo ($this->input->post('reverseip') ? $this->input->post('reverseip') : $t_ip['reverseip']); ?>" id="reverseip" />
	</div>
	
	
	<button type="submit" class="btn submit">Enregistrer</button>

</div>
	
<?php echo form_close(); ?>