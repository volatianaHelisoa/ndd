<?php echo form_open('domaine_theme_ip/edit/'.$t_domaine_theme_ip['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_domaine" class="col-md-4 control-label">Id Domaine</label>
		<div class="col-md-8">
			<input type="text" name="id_domaine" value="<?php echo ($this->input->post('id_domaine') ? $this->input->post('id_domaine') : $t_domaine_theme_ip['id_domaine']); ?>" class="form-control" id="id_domaine" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_ip" class="col-md-4 control-label">Id Ip</label>
		<div class="col-md-8">
			<input type="text" name="id_ip" value="<?php echo ($this->input->post('id_ip') ? $this->input->post('id_ip') : $t_domaine_theme_ip['id_ip']); ?>" class="form-control" id="id_ip" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_theme" class="col-md-4 control-label">Id Theme</label>
		<div class="col-md-8">
			<input type="text" name="id_theme" value="<?php echo ($this->input->post('id_theme') ? $this->input->post('id_theme') : $t_domaine_theme_ip['id_theme']); ?>" class="form-control" id="id_theme" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>