<?php echo form_open('domaine_theme_ip/edit/'.$t_domaine_theme_ip['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_domaine" class="col-md-4 control-label">T Domaine</label>
		<div class="col-md-8">
			<select name="id_domaine" class="form-control">
				<option value="">select t_domaine</option>
				<?php 
				foreach($all_t_domaine as $t_domaine)
				{
					$selected = ($t_domaine['id'] == $t_domaine_theme_ip['id_domaine']) ? ' selected="selected"' : "";

					echo '<option value="'.$t_domaine['id'].'" '.$selected.'>'.$t_domaine['id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_ip" class="col-md-4 control-label">T Ip</label>
		<div class="col-md-8">
			<select name="id_ip" class="form-control">
				<option value="">select t_ip</option>
				<?php 
				foreach($all_t_ip as $t_ip)
				{
					$selected = ($t_ip['id'] == $t_domaine_theme_ip['id_ip']) ? ' selected="selected"' : "";

					echo '<option value="'.$t_ip['id'].'" '.$selected.'>'.$t_ip['id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_theme" class="col-md-4 control-label">T Theme</label>
		<div class="col-md-8">
			<select name="id_theme" class="form-control">
				<option value="">select t_theme</option>
				<?php 
				foreach($all_t_theme as $t_theme)
				{
					$selected = ($t_theme['id'] == $t_domaine_theme_ip['id_theme']) ? ' selected="selected"' : "";

					echo '<option value="'.$t_theme['id'].'" '.$selected.'>'.$t_theme['id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>