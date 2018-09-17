<?php echo form_open('registrar/edit/'.$t_registrar['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $t_registrar['password']); ?>" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $t_registrar['name']); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="url" class="col-md-4 control-label">Url</label>
		<div class="col-md-8">
			<input type="text" name="url" value="<?php echo ($this->input->post('url') ? $this->input->post('url') : $t_registrar['url']); ?>" class="form-control" id="url" />
		</div>
	</div>
	<div class="form-group">
		<label for="login" class="col-md-4 control-label">Login</label>
		<div class="col-md-8">
			<input type="text" name="login" value="<?php echo ($this->input->post('login') ? $this->input->post('login') : $t_registrar['login']); ?>" class="form-control" id="login" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>