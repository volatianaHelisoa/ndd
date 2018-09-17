<?php echo form_open('ip/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_heberg" class="col-md-4 control-label">Id Heberg</label>
		<div class="col-md-8">
			<input type="text" name="id_heberg" value="<?php echo $this->input->post('id_heberg'); ?>" class="form-control" id="id_heberg" />
		</div>
	</div>
	<div class="form-group">
		<label for="adresse" class="col-md-4 control-label">Adresse</label>
		<div class="col-md-8">
			<input type="text" name="adresse" value="<?php echo $this->input->post('adresse'); ?>" class="form-control" id="adresse" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>