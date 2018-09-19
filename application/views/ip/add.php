<?php echo form_open('ip/add',array("class"=>"form-horizontal")); ?>
	<div class="head-section centered-el">
		<span class="title-l"></span>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla laoreet mauriss</p>
	</div>

	<div class="wrap-field info-gen carte ">
		<div class="title-field">Ajouter un IP</div>
		<div class="field">
			<label for="id_heberg" >Sélectionner hébergement</label>
			<select name="id_heberg" class="form-control">
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
			<input
				type="text"
				name="adresse"
				value="<?php echo $this->input->post('adresse'); ?>"
				id="adresse"
				required
				placeholder="192.168.0.255"
				pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$"
			/>
		</div>
		<div class="field">
		<label for="reverseip">Reverse IP</label>		
		<input type="text" name="reverseip" value="<?php echo $this->input->post('reverseip'); ?>"  id="reverseip" />
		</div>
		<button type="submit" class="btn submit">Enregistrer</button>
		</div>
	</div>
<?php echo form_close(); ?>