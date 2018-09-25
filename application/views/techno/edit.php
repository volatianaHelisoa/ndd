<?php echo form_open('techno/edit/'.$t_techno['id'],array("class"=>"form-horizontal")); ?>
<div class="wrap-field info-gen carte">
	<div class="title-field">Modifier la techno</div>
	<div class="field">
		<label for="name">Nom</label>
		<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $t_techno['name']); ?>" class="form-control" id="name" required />
	</div>
	<button type="submit" class="btn btn-success">Save</button>
</div>
	
<?php echo form_close(); ?>