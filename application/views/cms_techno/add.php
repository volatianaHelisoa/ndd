<?php echo form_open('cms_techno/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_cms" class="col-md-4 control-label">Id Cms</label>
		<div class="col-md-8">
			<input type="text" name="id_cms" value="<?php echo $this->input->post('id_cms'); ?>" class="form-control" id="id_cms" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_techno" class="col-md-4 control-label">Id Techno</label>
		<div class="col-md-8">
			<input type="text" name="id_techno" value="<?php echo $this->input->post('id_techno'); ?>" class="form-control" id="id_techno" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>