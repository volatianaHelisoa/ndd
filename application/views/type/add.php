<?php echo form_open('type/add',array("class"=>"form-horizontal")); ?>
	<div class="wrap-field info-gen carte">	
		<div class="title-field">Ajouter un type</div>
		<div class="field">
			<label for="name">Nom (*)</label>
			<input type="text" name="name" value="<?php echo $this->input->post('name_type'); ?>" id="name" required/>
		</div>
		
		<button type="submit" class="btn submit primary-action">Enregistrer</button>
		<a href="<?php echo site_url('type'); ?>" class="submit">Annuler</a>
	</div>

<?php echo form_close(); ?>