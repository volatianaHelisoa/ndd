<?php echo form_open('domaine/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_cms" class="col-md-4 control-label">T Cms</label>
		<div class="col-md-8">
			<select name="id_cms" class="form-control">
				<option value="">select t_cms</option>
				<?php 
				foreach($all_t_cms as $t_cms)
				{
					$selected = ($t_cms['id'] == $this->input->post('id_cms')) ? ' selected="selected"' : "";

					echo '<option value="'.$t_cms['id'].'" '.$selected.'>'.$t_cms['id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_registrar" class="col-md-4 control-label">T Registrar</label>
		<div class="col-md-8">
			<select name="id_registrar" class="form-control">
				<option value="">select t_registrar</option>
				<?php 
				foreach($all_t_registrar as $t_registrar)
				{
					$selected = ($t_registrar['id'] == $this->input->post('id_registrar')) ? ' selected="selected"' : "";

					echo '<option value="'.$t_registrar['id'].'" '.$selected.'>'.$t_registrar['id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="ftp_login" class="col-md-4 control-label">Ftp Login</label>
		<div class="col-md-8">
			<input type="text" name="ftp_login" value="<?php echo $this->input->post('ftp_login'); ?>" class="form-control" id="ftp_login" />
		</div>
	</div>
	<div class="form-group">
		<label for="ftp_password" class="col-md-4 control-label">Ftp Password</label>
		<div class="col-md-8">
			<input type="text" name="ftp_password" value="<?php echo $this->input->post('ftp_password'); ?>" class="form-control" id="ftp_password" />
		</div>
	</div>
	<div class="form-group">
		<label for="ftp_server" class="col-md-4 control-label">Ftp Server</label>
		<div class="col-md-8">
			<input type="text" name="ftp_server" value="<?php echo $this->input->post('ftp_server'); ?>" class="form-control" id="ftp_server" />
		</div>
	</div>
	<div class="form-group">
		<label for="admin_url" class="col-md-4 control-label">Admin Url</label>
		<div class="col-md-8">
			<input type="text" name="admin_url" value="<?php echo $this->input->post('admin_url'); ?>" class="form-control" id="admin_url" />
		</div>
	</div>
	<div class="form-group">
		<label for="admin_login" class="col-md-4 control-label">Admin Login</label>
		<div class="col-md-8">
			<input type="text" name="admin_login" value="<?php echo $this->input->post('admin_login'); ?>" class="form-control" id="admin_login" />
		</div>
	</div>
	<div class="form-group">
		<label for="admin_password" class="col-md-4 control-label">Admin Password</label>
		<div class="col-md-8">
			<input type="text" name="admin_password" value="<?php echo $this->input->post('admin_password'); ?>" class="form-control" id="admin_password" />
		</div>
	</div>
	<div class="form-group">
		<label for="nom" class="col-md-4 control-label">Nom</label>
		<div class="col-md-8">
			<input type="text" name="nom" value="<?php echo $this->input->post('nom'); ?>" class="form-control" id="nom" />
		</div>
	</div>
	<div class="form-group">
		<label for="date_creation" class="col-md-4 control-label">Date Creation</label>
		<div class="col-md-8">
			<input type="text" name="date_creation" value="<?php echo $this->input->post('date_creation'); ?>" class="form-control" id="date_creation" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>