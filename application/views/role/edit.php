<?php echo form_open('role/edit/'.$t_role['id'],array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte">
	<div class="title-field">Modifier le rôle</div>
	<div class="field">
		<label for="type">Type</label>
		<input type="text" name="type" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $t_role['type']); ?>" id="type" />
	</div>
	<button type="submit" class="btn submit">Enregistrer</button>
</div>
	
<?php echo form_close(); ?>