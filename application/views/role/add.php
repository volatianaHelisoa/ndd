<?php echo form_open('role/add',array("class"=>"form-horizontal")); ?>
	<div class="carte wrap-field info-gen">
		<div class="title-field">Ajouter registrar</div>
		<div class="field">
			<label for="type">Type</label>
			<input type="text" name="type" value="<?php echo $this->input->post('type'); ?>" class="form-control" id="type" />
		</div>
		
		<div class="field">
			<button type="submit" class="btn btn-success">Ajouter</button>
		</div>
	</div>
<?php echo form_close(); ?>