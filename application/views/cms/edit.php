<?php echo form_open('cms/edit/'.$t_cms['id'],array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte">
	<div class="title-field">Modifier le CMS</div>
	<div class="form-group">
		<label for="type">Type</label>
		<input type="text" name="type" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $t_cms['type']); ?>" class="form-control" id="type" />
	</div>
	
	<button type="submit" class="btn submit">Enregistrer</button>
</div>	
<?php echo form_close(); ?>