<?php echo form_open('type/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="name_type" class="col-md-4 control-label">Name Type</label>
		<div class="col-md-8">
			<input type="text" name="name_type" value="<?php echo $this->input->post('name_type'); ?>" class="form-control" id="name_type" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>