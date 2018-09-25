<?php echo form_open('theme/edit/'.$t_theme['id'],array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte">
	<div class="title-field">Modifier le thématique</div>
	<div class="form-group">
	<label for="name">Nom (*)</label>
		<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $t_theme['name']); ?>" id="name" required />
	</div>
	<button type="submit" class="btn submit">Enregistrer</button>
</div>
	
<?php echo form_close(); ?>