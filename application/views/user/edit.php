<?php echo form_open('user/edit/'.$t_user['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_role" class="col-md-4 control-label">T Role</label>
		<div class="col-md-8">
			<select name="id_role" class="form-control">
				<option value="">select t_role</option>
				<?php 
				foreach($all_t_role as $t_role)
				{
					$selected = ($t_role['id'] == $t_user['id_role']) ? ' selected="selected"' : "";

					echo '<option value="'.$t_role['id'].'" '.$selected.'>'.$t_role['id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $t_user['name']); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-md-4 control-label">Firstname</label>
		<div class="col-md-8">
			<input type="text" name="firstname" value="<?php echo ($this->input->post('firstname') ? $this->input->post('firstname') : $t_user['firstname']); ?>" class="form-control" id="firstname" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $t_user['email']); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $t_user['password']); ?>" class="form-control" id="password" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>