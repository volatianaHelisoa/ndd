<?php echo form_open('role/edit/'.$t_role['id'],array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte">
	<div class="title-field">Modifier le rôle</div>
	<div class="field">
		<label for="type">Type</label>
		<input type="text" name="type" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $t_role['type']); ?>" id="type" required />
	</div>
	<button type="submit" class="btn submit primary-action">Enregistrer</button>
	<a href="<?php echo site_url('role'); ?>" class="submit">Annuler</a>
</div>
	
<?php echo form_close(); ?>