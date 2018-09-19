<?php echo form_open('ip/edit/'.$t_ip['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_heberg" class="col-md-4 control-label">T Hebergement</label>
		<div class="col-md-8">
			<select name="id_heberg" class="form-control">
				<option value="">select t_hebergement</option>
				<?php 
				foreach($all_t_hebergement as $t_hebergement)
				{
					$selected = ($t_hebergement['id'] == $t_ip['id_heberg']) ? ' selected="selected"' : "";

					echo '<option value="'.$t_hebergement['id'].'" '.$selected.'>'.$t_hebergement['id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="reverseip" class="col-md-4 control-label">Reverseip</label>
		<div class="col-md-8">
			<input type="text" name="reverseip" value="<?php echo ($this->input->post('reverseip') ? $this->input->post('reverseip') : $t_ip['reverseip']); ?>" class="form-control" id="reverseip" />
		</div>
	</div>
	<div class="form-group">
		<label for="adresse" class="col-md-4 control-label">Adresse</label>
		<div class="col-md-8">
			<input type="text" name="adresse" value="<?php echo ($this->input->post('adresse') ? $this->input->post('adresse') : $t_ip['adresse']); ?>" class="form-control" id="adresse" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>