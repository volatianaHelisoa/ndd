<?php echo form_open('role/edit/'.$t_role['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="type" class="col-md-4 control-label">Type</label>
		<div class="col-md-8">
			<input type="text" name="type" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $t_role['type']); ?>" class="form-control" id="type" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>