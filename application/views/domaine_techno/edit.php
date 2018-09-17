<?php echo form_open('domaine_techno/edit/'.$t_domaine_techno['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_domaine" class="col-md-4 control-label">T Domaine</label>
		<div class="col-md-8">
			<select name="id_domaine" class="form-control">
				<option value="">select t_domaine</option>
				<?php 
				foreach($all_t_domaine as $t_domaine)
				{
					$selected = ($t_domaine['id'] == $t_domaine_techno['id_domaine']) ? ' selected="selected"' : "";

					echo '<option value="'.$t_domaine['id'].'" '.$selected.'>'.$t_domaine['id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="id_techno" class="col-md-4 control-label">T Techno</label>
		<div class="col-md-8">
			<select name="id_techno" class="form-control">
				<option value="">select t_techno</option>
				<?php 
				foreach($all_t_techno as $t_techno)
				{
					$selected = ($t_techno['id'] == $t_domaine_techno['id_techno']) ? ' selected="selected"' : "";

					echo '<option value="'.$t_techno['id'].'" '.$selected.'>'.$t_techno['id'].'</option>';
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